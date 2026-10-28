<?php
// Local PHP server only; Apache production uses .htaccess.
if (PHP_SAPI !== 'cli-server') { http_response_code(404); exit; }
$root = dirname(__DIR__);
$path = (string) parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if (str_starts_with($path, '/tools/') || str_starts_with($path, '/includes/') || $path === '/config.php') { http_response_code(403); exit; }
if ($path === '/sitemap.xml') { require $root . '/sitemap.php'; return; }
if (is_file($root . $path)) { return false; }
$route = trim($path, '/'); $file = $route ?: 'index';
foreach (['blog'=>['blog-details','post'], 'portfolio'=>['portfolio-details','project'], 'team'=>['team-details','member']] as $prefix=>[$template,$key]) {
    if (str_starts_with($route, $prefix . '/')) { $file=$template; $_GET[$key]=substr($route,strlen($prefix)+1); }
}
if ($route === 'services/digital-wedding-card') { $file='digital-wedding-card'; }
if (!preg_match('~^[a-z0-9-]+$~',$file) || !is_file($root.'/'.$file.'.php')) { http_response_code(404); require $root.'/error.php'; return; }
$_SERVER['SCRIPT_NAME']='/'.$file.'.php';
require $root.'/'.$file.'.php';
