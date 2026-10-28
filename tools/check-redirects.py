"""Exercise the real .htaccess in an isolated local Apache fixture."""
import json, shutil, subprocess, tempfile, time, urllib.request, urllib.error
from pathlib import Path
R=Path(__file__).resolve().parent.parent
apache=Path('C:/laragon/bin/apache/httpd-2.4.69-261002-Win64-VS18')
fixture=Path(tempfile.mkdtemp(prefix='.redirect-', dir=R/'tools'))
document=fixture/'public';document.mkdir()
shutil.copyfile(R/'.htaccess',document/'.htaccess')
for name in ['index','seo','sitemap','contact']:(document/(name+'.php')).write_text('fixture')
(document/'assets').mkdir();(document/'assets/site.012345abcdef.css').write_text('body{}')
modules=['authz_core','authz_host','dir','mime','rewrite','headers']
config=f'ServerRoot "{apache.as_posix()}"\nListen 127.0.0.1:8102\nServerName localhost\n'
config+='\n'.join(f'LoadModule {m}_module modules/mod_{m}.so' for m in modules)+'\n'
config+=f'''PidFile "{fixture.as_posix()}/httpd.pid"
ErrorLog "{fixture.as_posix()}/error.log"
TypesConfig "{apache.as_posix()}/conf/mime.types"
DocumentRoot "{document.as_posix()}"
<Directory "{R.as_posix()}">
AllowOverride None
</Directory>
<Directory "{document.as_posix()}">
AllowOverride All
Require all granted
</Directory>
'''
conf=fixture/'httpd.conf';conf.write_text(config)
class NoRedirect(urllib.request.HTTPRedirectHandler):
    def redirect_request(self,*args):return None
opener=urllib.request.build_opener(NoRedirect)
process=subprocess.Popen([str(apache/'bin/httpd.exe'),'-d',apache.as_posix(),'-f',conf.as_posix(),'-X'],stdout=subprocess.DEVNULL,stderr=subprocess.PIPE)
report=[]
try:
    time.sleep(2)
    cases=[('deweboo.com','/','https://deweboo.com/'),('www.deweboo.com','/','https://deweboo.com/'),('www.deweboo.com','/contact?from=a&x=2','https://deweboo.com/contact?from=a&x=2'),('deweboo.com','/index.php?x=1','https://deweboo.com/?x=1'),('www.deweboo.com','/seo-services?x=1','https://deweboo.com/seo?x=1'),('www.deweboo.com','/contact.php?x=1','https://deweboo.com/contact?x=1')]
    for host,path,target in cases:
        request=urllib.request.Request('http://127.0.0.1:8102'+path,headers={'Host':host},method='HEAD')
        try:response=opener.open(request)
        except urllib.error.HTTPError as e:response=e
        row={'host':host,'path':path,'status':response.code,'location':response.headers.get('Location'),'passed':response.code==301 and response.headers.get('Location')==target};report.append(row)
    for path,expected in [('/tools/foo.php',403),('/assets/site.012345abcdef.css',200),('/sitemap.xml',200)]:
        try:response=opener.open('http://127.0.0.1:8102'+path)
        except urllib.error.HTTPError as e:response=e
        row={'path':path,'status':response.code,'passed':response.code==expected}
        if path.endswith('.css'):row['cache_control']=response.headers.get('Cache-Control');row['passed'] &= 'immutable' in (row['cache_control'] or '')
        report.append(row)
    (R/'docs/redirect-validation.json').write_text(json.dumps(report,indent=2),encoding='utf-8')
    print(json.dumps(report,indent=2))
finally:
    process.terminate();process.wait()
    if not report:print(process.stderr.read().decode(errors='replace'))
    # Only remove the isolated directory this invocation created inside tools/.
    if fixture.resolve().is_relative_to((R/'tools').resolve()) and fixture.name.startswith('.redirect-'):
        shutil.rmtree(fixture)
raise SystemExit(not all(r['passed'] for r in report))
