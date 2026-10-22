<?php
declare(strict_types=1);

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/seo.php';
dw_load_page_seo('team-details');
$rep = dw_contact_rep();
$page_title = 'Aqeel Hassan Gilani | Lead Developer at De-Weboo Dev';
$page_description = 'Meet Aqeel Hassan Gilani, Lead Developer at De-Weboo Dev. Explore web development, software projects, and ways to contact Aqeel through De-Weboo Dev.';
$page_canonical = rtrim(dw_site_url(), '/') . '/aqeel-hassan-gilani';
$is_person_profile = true;
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>
<main>
    <section class="breadcrumb-section position-relative fix">
        <div class="container"><div class="bread-content text-center">
            <ul class="d-flex flex-wrap align-items-center gap-3 justify-content-center">
                <li><a href="/" class="p3-clr">Home</a></li><li class="p3-clr">/</li>
                <li class="white">Aqeel Hassan Gilani</li>
            </ul>
            <h1 class="white">Aqeel Hassan Gilani</h1>
        </div></div>
    </section>
    <section class="team-details-section section-padding">
        <div class="container"><div class="row g-5 align-items-center">
            <div class="col-md-5">
                <img src="/assets/img/team/team-details-aqeel.jpg" alt="Aqeel Hassan Gilani, Lead Developer at De-Weboo Dev" class="w-100 rounded-3">
            </div>
            <div class="col-md-7">
                <span class="p1-clr d-block mb-3">Lead Developer · De-Weboo Dev</span>
                <h2 class="black mb-4">About Aqeel Hassan Gilani</h2>
                <p class="pra fs-seven mb-4">Aqeel Hassan Gilani is the Lead Developer at De-Weboo Dev. This website presents the agency's web development services, software projects, and contact information.</p>
                <p class="pra fs-seven mb-4">Explore the portfolio to see projects from De-Weboo Dev, or contact the team to discuss a website or software build with Aqeel.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="/portfolio" class="common-btn p1-bg white rounded-3">View portfolio</a>
                    <a href="/contact" class="common-btn p1-bg white rounded-3">Contact Aqeel</a>
                </div>

            </div>
        </div></div>
    </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
