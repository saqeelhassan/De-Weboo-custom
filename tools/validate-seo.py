"""Validate every sitemap route against the actual rendered PHP output."""
import json, re, subprocess, sys, xml.etree.ElementTree as ET, importlib.util
from pathlib import Path
ROOT = Path(__file__).resolve().parent.parent
spec = importlib.util.spec_from_file_location('seo_audit', ROOT/'tools/seo-audit.py')
audit = importlib.util.module_from_spec(spec); spec.loader.exec_module(audit)
Page, render = audit.Page, audit.render
errors = []; findings = []; count = 0
for file in [*ROOT.glob('*.php'), *ROOT.glob('includes/*.php'), *ROOT.glob('handlers/*.php'), *ROOT.glob('tools/*.php')]:
    result = subprocess.run(['php','-l',str(file)],capture_output=True)
    if result.returncode: errors.append(result.stdout.decode(errors='replace'))
tree = ET.parse(ROOT/'sitemap.xml')
urls = [n.text for n in tree.findall('.//{*}loc')]
if len(urls) != len(set(urls)): errors.append('Duplicate sitemap URLs')
for url in urls:
    if not url.startswith('https://deweboo.com/'): errors.append('Noncanonical sitemap URL '+url)
    route = url.removeprefix('https://deweboo.com')
    if route.startswith(('/search','/tools/')): errors.append('Excluded URL '+url)
    try: html=render(route); page=Page(html)
    except Exception as e: errors.append(str(e)); continue
    count += 1
    if sum(t=='h1' for t,_ in page.headings)!=1: errors.append(route+': expected exactly one H1')
    if any(re.fullmatch(r'\s*\d+[+%]?\s*',text) for _,text in page.headings): errors.append(route+': numeric heading')
    if page.canonicals != [url]: errors.append(route+': canonical mismatch '+str(page.canonicals))
    if 'keywords' in page.meta: errors.append(route+': keywords meta remains')
    if not page.meta.get('og:title') or not page.meta.get('twitter:card'): errors.append(route+': missing social metadata')
    if not page.schemas: errors.append(route+': missing schema')
    if 'Content placeholder' not in html and any(route=='/'+s for s in ['seo','cloud-services','ai-machine-learning','digital-marketing']): errors.append(route+': missing service sections')
    if route.startswith('/blog/') and 'aria-label="Related service"' not in html: errors.append(route+': missing service CTA')
    if re.search(r'href="https?://(?:www\.)?youtube\.com/?"',html): errors.append(route+': generic YouTube link')
    for image in page.images:
        if not image.get('width') or not image.get('height'): findings.append({'route':route,'issue':'missing dimensions','src':image.get('src')})
        if not image.get('alt'):
            decorative = 'banner-bg-media' in image.get('class','') or image.get('aria-hidden')=='true'
            findings.append({'route':route,'issue':'empty/missing alt','src':image.get('src'),'decorative':decorative})
            if not decorative: errors.append(route+': meaningful image needs alt: '+str(image.get('src')))
    # Detect mismatched headings that HTMLParser would otherwise repair silently.
    stack=[]
    for token in re.finditer(r'<(/?)(h[1-6])\b[^>]*>',html):
        if not token[1]: stack.append(token[2])
        elif not stack or stack.pop()!=token[2]: errors.append(route+': mismatched heading tags')
    if stack: errors.append(route+': unclosed heading tags')
report={'routes_rendered':count,'php_lint':'passed' if not any('Parse' in e for e in errors) else 'failed','errors':errors,'image_findings':findings}
(ROOT/'docs/seo-validation.json').write_text(json.dumps(report,indent=2),encoding='utf-8')
print(json.dumps({'routes_rendered':count,'errors':errors,'image_findings_count':len(findings)},indent=2))
sys.exit(bool(errors))
