<?php
if (PHP_SAPI !== 'cli') { http_response_code(404); exit; }
require_once dirname(__DIR__) . '/includes/sitemap.php';
file_put_contents(dirname(__DIR__) . '/sitemap.xml', dw_sitemap_xml());
echo count(dw_sitemap_entries()) . " sitemap URLs generated.\n";
