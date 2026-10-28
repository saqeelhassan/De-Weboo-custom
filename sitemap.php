<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/sitemap.php';
header('Content-Type: application/xml; charset=UTF-8');
header('Cache-Control: public, max-age=300');
echo dw_sitemap_xml();
