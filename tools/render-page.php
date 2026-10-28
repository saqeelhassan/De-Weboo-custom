<?php
// CLI-only template renderer used by the SEO audit; never expose tooling publicly.
if (PHP_SAPI !== 'cli') { http_response_code(404); exit; }
$root = dirname(__DIR__);
$path = $argv[1] ?? '/';
$_SERVER['REQUEST_URI'] = $path;
$_SERVER['DOCUMENT_ROOT'] = $root;
$_SERVER['HTTP_HOST'] = 'localhost';
$_SERVER['REQUEST_METHOD'] = 'GET';
$route = trim((string) parse_url($path, PHP_URL_PATH), '/');
parse_str((string) parse_url($path, PHP_URL_QUERY), $_GET);
$file = $route === '' ? 'index' : $route;
foreach (['blog' => ['blog-details', 'post'], 'portfolio' => ['portfolio-details', 'project'], 'team' => ['team-details', 'member']] as $prefix => [$template, $key]) {
    if (str_starts_with($route, $prefix . '/')) { $file = $template; $_GET[$key] = substr($route, strlen($prefix) + 1); }
}
if ($route === 'services/digital-wedding-card') { $file = 'digital-wedding-card'; }
if (!preg_match('~^[a-z0-9-]+$~', $file) || !is_file($root . '/' . $file . '.php')) { exit(1); }
$_SERVER['SCRIPT_NAME'] = '/' . $file . '.php';
chdir($root);
require $root . '/' . $file . '.php';
