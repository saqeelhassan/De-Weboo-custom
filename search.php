<?php

declare(strict_types=1);

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/site-search.php';
require_once __DIR__ . '/includes/seo.php';

$query = trim((string) ($_GET['q'] ?? ''));
$results = dw_site_search($query);

dw_load_page_seo('search');
if ($query !== '') {
    $page_title = 'Search: ' . $query . ' | De-Weboo';
    $page_description = count($results) . ' result(s) for “' . $query . '” on De-Weboo — services, blog, portfolio, team, and support pages.';
    $page_robots = 'noindex, follow';
}

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>
    <section class="breadcrumb-section position-relative fix">
        <div class="container">
            <div class="bread-content text-center">
                <ul class="d-flex align-items-center gap-3 justify-content-center">
                    <li><a href="/" class="p3-clr">Home</a></li>
                    <li class="p3-clr">/</li>
                    <li class="white">Search</li>
                </ul>
                <h1 class="white visible-from-right">Search</h1>
            </div>
        </div>
        <img loading="lazy" src="/assets/img/element/bread-ele.png" alt="" class="bread-ele">
    </section>

    <section class="blog-details-section fix section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="blog-details-left">
                        <form method="get" action="/search" class="site-search-form mb-4 pb-2" role="search">
                            <label class="form-label black fw-semibold mb-2" for="site-search-input">Search the site</label>
                            <div class="d-flex flex-column flex-sm-row gap-3">
                                <input type="search" name="q" id="site-search-input" class="form-control site-search-input flex-grow-1"
                                    placeholder="Services, blog, portfolio, team, HIPAA…"
                                    value="<?php echo e($query); ?>" autocomplete="off" required>
                                <button type="submit"
                                    class="border-0 common-btn box-style cmn-style1 d-inline-flex justify-content-center align-items-center gap-2 fs18 fw-semibold white overflow-hidden rounded-5 p3-bg flex-shrink-0">
                                    Search
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </form>

<?php if ($query === '') : ?>
                        <p class="pra fs-seven mb-0">
                            Search across De-Weboo pages, services, blog articles, portfolio case studies, team profiles, and support resources.
                        </p>
<?php elseif ($results === []) : ?>
                        <p class="pra fs-seven mb-3">No results found for <strong class="black"><?php echo e($query); ?></strong>.</p>
                        <p class="pra fs-seven mb-0">Try different keywords such as <em>web development</em>, <em>HIPAA</em>, <em>SEO</em>, or browse our <a href="/services" class="p1-clr">services</a> and <a href="/blog" class="p1-clr">blog</a>.</p>
<?php else : ?>
                        <p class="pra fs-seven mb-4"><?php echo count($results); ?> result<?php echo count($results) === 1 ? '' : 's'; ?> for <strong class="black"><?php echo e($query); ?></strong></p>
                        <ul class="site-search-results list-unstyled d-grid gap-3 mb-0">
<?php foreach ($results as $result) : ?>
                            <li class="site-search-result-item">
                                <span class="site-search-type badge rounded-pill mb-2"><?php echo e($result['type']); ?></span>
                                <h2 class="black fs-five fw-bold mb-2">
                                    <a href="<?php echo e($result['url']); ?>" class="black"><?php echo e($result['title']); ?></a>
                                </h2>
                                <p class="pra fs-seven mb-0"><?php echo e(dw_search_excerpt($result['excerpt'], $query)); ?></p>
                            </li>
<?php endforeach; ?>
                        </ul>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
