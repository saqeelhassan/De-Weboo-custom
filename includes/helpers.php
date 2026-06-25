<?php

declare(strict_types=1);

/**
 * Escape output for safe HTML display (XSS mitigation when re-displaying user input).
 */
function e(?string $value): string
{
    return htmlspecialchars((string) ($value ?? ''), ENT_QUOTES | ENT_HTML5, 'UTF-8');
}
