<?php

declare(strict_types=1);

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/blog-posts.php';
require_once __DIR__ . '/includes/seo.php';

dw_load_page_seo('blog');
$page_title = 'Blog | Software & Healthcare IT Insights | De-Weboo';
$page_description = 'Expert articles on web development, AI automation, data engineering, cloud, SEO, AEO, GEO, and HIPAA medical systems from De-Weboo.';

$posts = dw_blog_posts_sorted();
$byService = dw_blog_posts_by_service();

require_once __DIR__ . '/includes/helpers.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>
<!-- Banner Section Start -->
    <section class="breadcrumb-section position-relative fix">
        <div class="container">
            <div class="bread-content text-center">
                <ul class="d-flex align-items-center gap-3 justify-content-center">
                    <li>
                        <a href="/" class="p3-clr">Home</a>
                    </li>
                    <li class="p3-clr">/</li>
                    <li class="white">Our blog</li>
                </ul>
                <h1 class="white visible-from-right">Insights &amp; Resources</h1>
            </div>
        </div>
        <img loading="lazy" src="/assets/img/element/bread-ele.png" alt="" class="bread-ele">
    </section>

    <section class="blog-section fix section-padding">
        <div class="container">
            <div class="row justify-content-center mb-lg-5 mb-4">
                <div class="col-lg-8 text-center">
                    <p class="pra fs-six mb-0">
                        SEO, AEO, and GEO-friendly guides on enterprise software, healthcare IT, and growth infrastructure—written by the De-Weboo engineering team for worldwide B2B, B2C, and B2A buyers.
                    </p>
                </div>
            </div>
            <div class="news-wrapper">
                <div class="row justify-content-center g-4">
<?php
$delay = 0.3;
foreach ($posts as $post) :
    $cardImage = dw_blog_image($post['images']['card']);
    $postUrl = dw_blog_url($post['slug']);
    ?>
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="<?php echo e((string) $delay); ?>s">
                        <div class="news-single-items rounded-3 p-xxl-2 p-1 border overflow-hidden style1 h-100">
                            <a href="<?php echo e($postUrl); ?>"
                                class="news-image position-relative d-block rounded-3 overflow-hidden">
                                <img loading="lazy" src="<?php echo e($cardImage); ?>"
                                    alt="<?php echo e($post['title']); ?>"
                                    class="rounded-3 overflow-hidden w-100 blog-cover-img">
                                <span
                                    class="m-lg-3 m-sm-2 m-1 trns blog-badge1 position-absolute top-0 start-0 z-1 fw_500 bg-white d-inline-block py-xl-2 py-1 px-3 rounded-5 text-uppercase fs-eight black"><?php echo e($post['category']); ?></span>
                            </a>
                            <div class="news-content">
                                <h4 class="mb-xxl-4 mb-3 pb-xxl-1 blog-card-title">
                                    <a href="<?php echo e($postUrl); ?>" class="black">
                                        <?php echo dw_blog_card_title($post['title']); ?>
                                    </a>
                                </h4>
                                <p class="pra fs-eight mb-3 blog-card-excerpt"><?php echo e($post['excerpt']); ?></p>
                                <div class="d-flex align-items-center justify-content-between gap-3 blog-post-meta">
                                    <div class="author d-flex align-items-center gap-2 blog-post-meta-author">
                                        <span class="fs-seven fw_500 black"><?php echo e($post['author']); ?></span>
                                    </div>
                                    <div class="d-flex align-items-center gap-1 pra fs-eight heading-font blog-post-meta-date">
                                        <i class="fa-regular fa-clock black"></i>
                                        <time datetime="<?php echo e($post['published']); ?>"><?php echo e(dw_blog_format_date($post['published'])); ?></time>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<?php
    $delay += 0.1;
endforeach;
?>
                </div>
            </div>
        </div>
    </section>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
