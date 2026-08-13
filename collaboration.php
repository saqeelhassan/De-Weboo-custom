<?php

declare(strict_types=1);

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/helpers.php';
require_once __DIR__ . '/includes/seo.php';

$extra_stylesheets = ['/assets/css/collaboration.css'];
$extra_scripts = ['/assets/js/collaboration.js'];

dw_load_page_seo(basename(__FILE__, '.php'));
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>
<div class="collaboration-page">
    <section class="breadcrumb-section position-relative fix">
        <div class="container">
            <div class="bread-content text-center">
                <ul class="d-flex align-items-center gap-3 justify-content-center">
                    <li><a href="/" class="p3-clr">Home</a></li>
                    <li class="p3-clr">/</li>
                    <li class="white">Collaboration</li>
                </ul>
                <h1 class="white visible-from-right">CaddSight Group Collaboration</h1>
            </div>
        </div>
        <img loading="lazy" src="/assets/img/element/bread-ele.png" alt="" class="bread-ele">
    </section>

    <section class="section-padding fix bg-color">
        <div class="container">
            <div class="row g-4 g-xl-5 align-items-center">
                <div class="col-lg-6">
                    <span class="collab-badge mb-4">
                        <span class="dot"></span>
                        CaddSight Group — Parent Company
                    </span>
                    <div class="section-title mb-4">
                        <h2 class="black fw-bold wow fadeInUp visible-slowly-right" data-wow-delay=".2s">
                            Integrated support across design, logistics &amp;
                            <span class="collab-title-accent">digital solutions for enterprise clients.</span>
                        </h2>
                    </div>
                    <p class="pra fs-seven mb-4">
                        De-Weboo operates as a specialized division of <strong>CaddSight Group</strong>—an enterprise software engineering firm delivering software, web, mobile, and custom medical systems for B2B, B2C, and B2A frameworks, with lifecycle cloud, SEO, and marketing as secondary services.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#collab-intake"
                            class="common-btn box-style cmn-style1 d-inline-flex justify-content-center align-items-center gap-2 fs18 fw-semibold white overflow-hidden rounded-5 p3-bg">
                            Request Capabilities Statement
                        </a>
                        <a href="#collab-rfp"
                            class="common-btn box-style d-inline-flex justify-content-center align-items-center gap-2 fs18 fw-semibold black overflow-hidden rounded-5 bg-white border">
                            Assess Teaming Score
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="collab-org-card">
                        <div class="collab-org-card__head">
                            <span class="label"><span class="d-inline-block rounded-circle bg-danger me-2" style="width:10px;height:10px;"></span> Integrated Group Map</span>
                            <span class="status">Active Deployments</span>
                        </div>
                        <svg viewBox="0 0 400 240" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <line x1="20" y1="40" x2="380" y2="40" stroke="#f1f5f9" stroke-width="2"/>
                            <line x1="20" y1="140" x2="380" y2="140" stroke="#f1f5f9" stroke-width="2"/>
                            <path d="M 200 70 L 200 110 M 70 110 L 330 110 M 70 110 L 70 140 M 200 110 L 200 140 M 330 110 L 330 140" stroke="#CBD5E1" stroke-width="3" stroke-linecap="round"/>
                            <rect x="110" y="20" width="180" height="46" rx="8" fill="#FFF" stroke="#F05138" stroke-width="4"/>
                            <text x="200" y="42" fill="#0F172A" font-size="12" font-weight="900" font-family="sans-serif" text-anchor="middle">CADDSIGHT GROUP</text>
                            <text x="200" y="55" fill="#64748B" font-size="8" font-weight="bold" font-family="sans-serif" text-anchor="middle">PARENT &amp; CONTRACT ENTITY</text>
                            <rect x="20" y="140" width="100" height="50" rx="8" fill="#FFF" stroke="#F05138" stroke-width="3"/>
                            <text x="70" y="162" fill="#F05138" font-size="10" font-weight="900" font-family="sans-serif" text-anchor="middle">CaddSight</text>
                            <text x="70" y="176" fill="#64748B" font-size="7" font-weight="bold" font-family="sans-serif" text-anchor="middle">CAD / Drafting</text>
                            <rect x="150" y="140" width="100" height="50" rx="8" fill="#FFF" stroke="#1E1B1B" stroke-width="3"/>
                            <text x="205" y="162" fill="#1E1B1B" font-size="10" font-weight="900" font-family="sans-serif" text-anchor="middle">EZ Falcons</text>
                            <text x="200" y="176" fill="#64748B" font-size="7" font-weight="bold" font-family="sans-serif" text-anchor="middle">U.S. Logistics Support</text>
                            <rect x="280" y="140" width="100" height="50" rx="8" fill="#FFF" stroke="#1E40AF" stroke-width="3"/>
                            <text x="330" y="162" fill="#1E40AF" font-size="10" font-weight="900" font-family="sans-serif" text-anchor="middle">De-Weboo</text>
                            <text x="330" y="176" fill="#64748B" font-size="7" font-weight="bold" font-family="sans-serif" text-anchor="middle">Software &amp; IT</text>
                        </svg>
                        <div class="collab-org-legend">
                            <span><i class="fas fa-check-circle text-success me-1"></i> Single team coordination</span>
                            <span><i class="fas fa-file-invoice p1-clr me-1"></i> One capability statement</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require __DIR__ . '/includes/collaboration-sections.php'; ?>
</div>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
