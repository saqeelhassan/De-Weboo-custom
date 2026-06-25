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
