<?php

declare(strict_types=1);

/**
 * Site bootstrap: security headers and path constants.
 * Include once at the top of every public PHP page (before any output).
 */
if (defined('DW_CONFIG_LOADED')) {
    return;
}

define('DW_CONFIG_LOADED', true);
define('DW_ROOT', __DIR__);

if (PHP_SAPI !== 'cli' && !headers_sent()) {
    header('X-Frame-Options: SAMEORIGIN');
    header('X-Content-Type-Options: nosniff');
    header('Referrer-Policy: strict-origin-when-cross-origin');
    header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
}

/**
 * Detect a sub-folder deployment (e.g. local dev at /De-weboo-webiste/ instead
 * of the domain root) by diffing the project root against DOCUMENT_ROOT, then
 * rewrite the site's root-absolute href/src/action paths to include it.
 * No-op (and no output buffering) when the app is already served from root.
 */
function dw_base_path(): string
{
    static $base = null;
    if ($base !== null) {
        return $base;
    }

    $docRoot = isset($_SERVER['DOCUMENT_ROOT']) ? rtrim(str_replace('\\', '/', (string) $_SERVER['DOCUMENT_ROOT']), '/') : '';
    $root = rtrim(str_replace('\\', '/', DW_ROOT), '/');

    $base = '';
    if ($docRoot !== '' && $root !== $docRoot && str_starts_with($root, $docRoot . '/')) {
        $base = substr($root, strlen($docRoot));
    }

    return $base;
}

if (PHP_SAPI !== 'cli') {
    $dwBasePath = dw_base_path();
    if ($dwBasePath !== '') {
        ob_start(static function (string $html) use ($dwBasePath): string {
            return preg_replace('/\b(href|src|action)="\/(?!\/)/', '$1="' . $dwBasePath . '/', $html) ?? $html;
        });
    }
}
