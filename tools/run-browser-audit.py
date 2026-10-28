"""Compare HEAD templates and current templates without changing the worktree."""
import os, subprocess, tempfile, time, json
from pathlib import Path
R=Path(__file__).resolve().parent.parent
baseline=Path(tempfile.mkdtemp(prefix='deweboo-baseline-'))
tracked=subprocess.run(['git','ls-files'],cwd=R,capture_output=True,check=True).stdout.decode().splitlines()
for name in tracked:
    if not (name.endswith('.php') or (name.startswith('assets/css/') and name.endswith('.css'))): continue
    if name.startswith(('tools/','handlers/','build-')): continue
    content=subprocess.run(['git','show','HEAD:'+name],cwd=R,capture_output=True,check=True).stdout
    p=baseline/name;p.parent.mkdir(parents=True,exist_ok=True);p.write_bytes(content)
router='''<?php
$root=__DIR__;
$path=(string)parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
$assetRoot=getenv('DW_ASSET_ROOT');
if(str_starts_with($path,'/assets/')) {
 $file=is_file($root.$path)?$root.$path:$assetRoot.$path;
 if(!is_file($file)){http_response_code(404);exit;}
 $ext=pathinfo($file,PATHINFO_EXTENSION);
 $types=['css'=>'text/css','js'=>'application/javascript','svg'=>'image/svg+xml','woff2'=>'font/woff2'];
 header('Content-Type: '.($types[$ext]??mime_content_type($file)));readfile($file);return;
}
$_SERVER['SCRIPT_NAME']='/index.php';require $root.'/index.php';
'''
(baseline/'router.php').write_text(router,encoding='utf-8')
env=os.environ.copy();env['DW_ASSET_ROOT']=str(R)
server=subprocess.Popen(['php','-S','127.0.0.1:8101','-t',str(baseline),str(baseline/'router.php')],env=env,stdout=subprocess.DEVNULL,stderr=subprocess.DEVNULL)
try:
    time.sleep(1)
    result=subprocess.run(['node','tools/browser-audit.cjs'],cwd=R,env=env)
finally: server.terminate();server.wait()
raise SystemExit(result.returncode)
