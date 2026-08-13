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
