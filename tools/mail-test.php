<?php

declare(strict_types=1);

echo 'mail() available: ' . (function_exists('mail') ? 'yes' : 'no') . PHP_EOL;
echo 'sendmail_path: ' . (ini_get('sendmail_path') ?: '(empty)') . PHP_EOL;
echo 'SMTP (ini): ' . (ini_get('SMTP') ?: '(empty)') . PHP_EOL;
echo 'smtp_port (ini): ' . (ini_get('smtp_port') ?: '(empty)') . PHP_EOL;

$r = @mail('test@example.com', 'Laragon test', 'test body', 'From: test@localhost');
echo 'mail() returned: ' . ($r ? 'true' : 'false') . PHP_EOL;

require_once dirname(__DIR__) . '/includes/mail.php';
echo 'SMTP configured: ' . (dw_mail_use_smtp() ? 'yes' : 'no') . PHP_EOL;
echo 'From email: ' . dw_mail_from_email() . PHP_EOL;
echo 'Inbox: ' . implode(', ', dw_form_inbox_emails()) . PHP_EOL;
