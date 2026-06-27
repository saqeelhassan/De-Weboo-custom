<?php

declare(strict_types=1);

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/support-pages.php';
require_once __DIR__ . '/includes/seo.php';

dw_load_page_seo('client-support');
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';

dw_render_support_page('client-support');

require_once __DIR__ . '/includes/footer.php';
