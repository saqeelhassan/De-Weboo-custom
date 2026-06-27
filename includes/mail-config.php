<?php

declare(strict_types=1);

require_once __DIR__ . '/seo-config.php';

/**
 * Outbound mail settings for form notifications (server mailbox / SMTP).
 * Copy mail-config.local.php.example → mail-config.local.php on your server and set the SMTP password.
 *
 * @return array{
 *     fromEmail: string,
 *     fromName: string,
 *     transport: 'mail'|'smtp',
 *     smtp: array{host: string, port: int, encryption: 'tls'|'ssl'|'none', username: string, password: string}
 * }
 */
function dw_mail_config(): array
{
    static $config = null;

    if ($config !== null) {
        return $config;
    }

    $org = dw_org_config();
    $serverEmail = (string) ($org['email'] ?? 'Info@deweboo.com');

    $defaults = [
        'fromEmail' => $serverEmail,
        'fromName' => 'De-Weboo',
        'transport' => 'mail',
        'smtp' => [
            'host' => 'mail.deweboo.com',
            'port' => 587,
            'encryption' => 'tls',
            'username' => $serverEmail,
            'password' => '',
        ],
    ];

    $localPath = __DIR__ . '/mail-config.local.php';
    if (is_file($localPath)) {
        $local = require $localPath;
        if (is_array($local)) {
            if (isset($local['smtp']) && is_array($local['smtp'])) {
                $defaults['smtp'] = array_merge($defaults['smtp'], $local['smtp']);
                unset($local['smtp']);
            }
            $defaults = array_merge($defaults, $local);
        }
    }

    $config = $defaults;

    return $config;
}

function dw_mail_from_email(): string
{
    $from = trim((string) (dw_mail_config()['fromEmail'] ?? ''));

    if ($from !== '' && filter_var($from, FILTER_VALIDATE_EMAIL)) {
        return $from;
    }

    return (string) (dw_org_config()['email'] ?? '');
}

function dw_mail_use_smtp(): bool
{
    $cfg = dw_mail_config();
    if (($cfg['transport'] ?? 'mail') !== 'smtp') {
        return false;
    }

    $smtp = $cfg['smtp'] ?? [];

    return trim((string) ($smtp['host'] ?? '')) !== ''
        && trim((string) ($smtp['username'] ?? '')) !== ''
        && (string) ($smtp['password'] ?? '') !== '';
}
