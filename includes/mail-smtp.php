<?php

declare(strict_types=1);

/**
 * Minimal SMTP client for cPanel / hosting mailboxes (AUTH LOGIN, TLS or SSL).
 */
function dw_smtp_send(
    array $recipients,
    string $subject,
    string $body,
    string $fromEmail,
    string $fromName,
    ?string $replyToEmail = null,
    ?string $replyToName = null
): bool {
    $cfg = dw_mail_config()['smtp'] ?? [];
    $host = trim((string) ($cfg['host'] ?? ''));
    $port = (int) ($cfg['port'] ?? 587);
    $encryption = strtolower(trim((string) ($cfg['encryption'] ?? 'tls')));
    $username = trim((string) ($cfg['username'] ?? ''));
    $password = (string) ($cfg['password'] ?? '');

    if ($host === '' || $username === '' || $password === '' || $recipients === []) {
        return false;
    }

    $remote = $encryption === 'ssl'
        ? 'ssl://' . $host . ':' . $port
        : $host . ':' . $port;

    $socket = @stream_socket_client(
        $remote,
        $errno,
        $errstr,
        20,
        STREAM_CLIENT_CONNECT,
        stream_context_create(['ssl' => ['verify_peer' => true, 'verify_peer_name' => true]])
    );

    if ($socket === false) {
        return false;
    }

    stream_set_timeout($socket, 20);

    try {
        dw_smtp_expect($socket, [220]);
        dw_smtp_cmd($socket, 'EHLO ' . dw_smtp_client_host(), [250]);

        if ($encryption === 'tls') {
            dw_smtp_cmd($socket, 'STARTTLS', [220]);
            if (!@stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) {
                return false;
            }
            dw_smtp_cmd($socket, 'EHLO ' . dw_smtp_client_host(), [250]);
        }

        dw_smtp_cmd($socket, 'AUTH LOGIN', [334]);
        dw_smtp_cmd($socket, base64_encode($username), [334]);
        dw_smtp_cmd($socket, base64_encode($password), [235]);

        dw_smtp_cmd($socket, 'MAIL FROM:<' . $fromEmail . '>', [250]);

        foreach ($recipients as $recipient) {
            dw_smtp_cmd($socket, 'RCPT TO:<' . $recipient . '>', [250, 251]);
        }

        dw_smtp_cmd($socket, 'DATA', [354]);

        $encodedSubject = '=?UTF-8?B?' . base64_encode($subject) . '?=';
        $fromHeader = $fromName !== ''
            ? 'From: ' . dw_smtp_encode_address($fromName, $fromEmail)
            : 'From: <' . $fromEmail . '>';

        $messageLines = [
            'Date: ' . gmdate('D, d M Y H:i:s') . ' +0000',
            'MIME-Version: 1.0',
            'Content-Type: text/plain; charset=UTF-8',
            'Content-Transfer-Encoding: 8bit',
            $fromHeader,
        ];

        if ($replyToEmail !== null && filter_var($replyToEmail, FILTER_VALIDATE_EMAIL)) {
            $messageLines[] = 'Reply-To: ' . dw_smtp_encode_address($replyToName ?? '', $replyToEmail);
        }

        $messageLines[] = 'To: ' . implode(', ', $recipients);
        $messageLines[] = 'Subject: ' . $encodedSubject;
        $messageLines[] = '';
        $messageLines[] = str_replace(["\r\n", "\r"], "\n", $body);

        $payload = implode("\r\n", $messageLines);
        $payload = preg_replace('/^\./m', '..', $payload) ?? $payload;

        fwrite($socket, $payload . "\r\n.\r\n");
        dw_smtp_expect($socket, [250]);
        dw_smtp_cmd($socket, 'QUIT', [221]);
    } catch (Throwable) {
        @fclose($socket);

        return false;
    }

    fclose($socket);

    return true;
}

function dw_smtp_client_host(): string
{
    $host = $_SERVER['HTTP_HOST'] ?? 'deweboo.com';

    return preg_replace('/:\d+$/', '', (string) $host) ?: 'deweboo.com';
}

function dw_smtp_encode_address(string $name, string $email): string
{
    $name = trim($name);
    if ($name === '') {
        return '<' . $email . '>';
    }

    $encoded = '=?UTF-8?B?' . base64_encode($name) . '?=';

    return $encoded . ' <' . $email . '>';
}

/** @param list<int> $codes */
function dw_smtp_cmd($socket, string $command, array $codes): void
{
    fwrite($socket, $command . "\r\n");
    dw_smtp_expect($socket, $codes);
}

/** @param list<int> $codes */
function dw_smtp_expect($socket, array $codes): void
{
    $response = '';
    while (($line = fgets($socket, 515)) !== false) {
        $response .= $line;
        if (isset($line[3]) && $line[3] === ' ') {
            break;
        }
    }

    if ($response === '') {
        throw new RuntimeException('Empty SMTP response.');
    }

    $code = (int) substr($response, 0, 3);
    if (!in_array($code, $codes, true)) {
        throw new RuntimeException('Unexpected SMTP response: ' . trim($response));
    }
}
