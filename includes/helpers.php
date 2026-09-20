<?php

declare(strict_types=1);

/**
 * Escape output for safe HTML display (XSS mitigation when re-displaying user input).
 */
function e(?string $value): string
{
    return htmlspecialchars((string) ($value ?? ''), ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

/**
 * Current request path without the .php extension, for building clean form actions.
 */
function dw_self_path(): string
{
    $path = parse_url((string) ($_SERVER['REQUEST_URI'] ?? ''), PHP_URL_PATH) ?? '';

    return preg_replace('/\.php$/', '', $path) ?? $path;
}

/**
 * Append a cache-busting ?v= query string (file mtime) to a local static asset
 * path, so CDN/browser caches fetch the new file the moment it's deployed
 * instead of serving a stale copy until the cache TTL expires.
 */
function dw_asset(string $path): string
{
    $fsPath = __DIR__ . '/../' . ltrim($path, '/');
    $mtime = @filemtime($fsPath);

    return $path . ($mtime !== false ? '?v=' . $mtime : '');
}
