<?php
declare(strict_types=1);

/** Short-lived anonymous HTML cache, outside the document root. */
function dw_start_page_cache(): void
{
    if (PHP_SAPI === 'cli' || getenv('DW_PAGE_CACHE') === '0' || ($_SERVER['REQUEST_METHOD'] ?? '') !== 'GET'
        || !empty($_GET) || !empty($_POST) || !empty($_COOKIE) || !empty($_SERVER['HTTP_AUTHORIZATION'])
        || session_status() === PHP_SESSION_ACTIVE || (int) ini_get('session.auto_start') === 1) { return; }
    $script = basename((string) ($_SERVER['SCRIPT_NAME'] ?? ''), '.php');
    if (in_array($script, ['search', 'error', 'sitemap', 'config'], true)
        || !is_file(DW_ROOT . '/' . $script . '.php') || str_starts_with($script, 'build-')) { return; }
    // An edit to any PHP source invalidates all cached pages, including shared data.
    $sources = array_merge(glob(DW_ROOT . '/*.php') ?: [], glob(DW_ROOT . '/includes/*.php') ?: [], glob(DW_ROOT . '/includes/*.json') ?: []);
    $signature = [];
    foreach ($sources as $source) { $signature[] = $source . ':' . filemtime($source) . ':' . filesize($source); }
    $directory = sys_get_temp_dir() . '/deweboo-' . substr(hash('sha256', DW_ROOT), 0, 16);
    if (!is_dir($directory) && !@mkdir($directory, 0700, true) && !is_dir($directory)) { return; }
    $key = hash('sha256', implode('|', $signature) . ($_SERVER['REQUEST_URI'] ?? '/') . ($_SERVER['HTTP_HOST'] ?? ''));
    $file = $directory . '/' . $key . '.html';
    if (is_file($file) && filemtime($file) > time() - 300) {
        header('X-DW-Cache: HIT'); header('Content-Type: text/html; charset=UTF-8');
        readfile($file); exit;
    }
    header('X-DW-Cache: MISS');
    ob_start(static function(string $html) use ($file, $directory): string {
        $cacheable = http_response_code() === 200 && str_contains($html, '</html>');
        foreach (headers_list() as $header) {
            if (preg_match('/^(?:Set-Cookie|Location):|^Cache-Control:.*(?:private|no-store)/i', $header)) { $cacheable = false; }
        }
        if ($cacheable) {
            $temporary = tempnam($directory, 'dw-');
            if ($temporary !== false) {
                file_put_contents($temporary, $html, LOCK_EX); @chmod($temporary, 0600); @rename($temporary, $file);
                if (is_file($temporary)) { @unlink($temporary); }
            }
            // Bounded opportunistic cleanup of expired page files.
            foreach (array_slice(glob($directory . '/*.html') ?: [], 0, 100) as $stale) {
                if (filemtime($stale) < time() - 600) { @unlink($stale); }
            }
        }
        return $html;
    });
}
