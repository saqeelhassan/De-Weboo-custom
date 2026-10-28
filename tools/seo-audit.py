"""Render real PHP templates and report SEO/image/resource regressions. CLI only."""
import json, re, subprocess, sys, time
from pathlib import Path
from html.parser import HTMLParser

ROOT = Path(__file__).resolve().parent.parent

class Page(HTMLParser):
    def __init__(self, html):
        super().__init__(); self.headings = []; self.images = []; self.resources = set(); self.canonicals = []; self.schemas = []; self.meta = {}; self.heading = None; self.script = None
        self.feed(html)
    def handle_starttag(self, tag, attrs):
        a = dict(attrs)
        if re.fullmatch('h[1-6]', tag): self.heading = [tag, '']
        if tag == 'img': self.images.append(a)
        if tag == 'script' and a.get('src'): self.resources.add(a['src'])
        if tag == 'link' and a.get('rel') in ('stylesheet', 'preload'): self.resources.add(a.get('href', ''))
        if tag == 'link' and a.get('rel') == 'canonical': self.canonicals.append(a.get('href'))
        if tag == 'meta': self.meta[a.get('name', a.get('property'))] = a.get('content')
        if tag == 'script' and a.get('type') == 'application/ld+json': self.script = ''
    def handle_data(self, data):
        if self.heading is not None: self.heading[1] += data
        if self.script is not None: self.script += data
    def handle_endtag(self, tag):
        if self.heading is not None and tag == self.heading[0]: self.headings.append(self.heading); self.heading = None
        if tag == 'script' and self.script is not None: self.schemas.append(json.loads(self.script)); self.script = None

def render(path):
    result = subprocess.run(['php', str(ROOT/'tools/render-page.php'), path], capture_output=True, cwd=ROOT)
    if result.returncode or result.stderr: raise RuntimeError(path + ': ' + result.stderr.decode(errors='replace'))
    return result.stdout.decode('utf-8')

if __name__ == '__main__':
    mode = sys.argv[1] if len(sys.argv) > 1 else 'after'
    html = render('/'); page = Page(html)
    stats = {'html_bytes':len(html.encode()), 'css_js_preload_urls':len(page.resources), 'image_elements':len(page.images), 'h1_count':sum(t=='h1' for t,_ in page.headings), 'missing_or_empty_alt':[i.get('src') for i in page.images if not i.get('alt')], 'note':'Template output counts, not browser network requests or mobile Lighthouse metrics.'}
    target = ROOT/'docs'; target.mkdir(exist_ok=True)
    (target/f'seo-{mode}.json').write_text(json.dumps(stats, indent=2), encoding='utf-8')
    print(json.dumps(stats, indent=2))
