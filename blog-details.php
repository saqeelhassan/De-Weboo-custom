<?php

declare(strict_types=1);

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/blog-posts.php';
require_once __DIR__ . '/includes/blog-render.php';
require_once __DIR__ . '/includes/seo.php';

$post = dw_blog_post($_GET['post'] ?? null);

if ($post === null) {
    header('Location: /blog', true, 302);
    exit;
}

dw_load_page_seo('blog-details');
$page_title = $post['title'] . ' | De-Weboo Blog';
$page_description = $post['excerpt'];
$page_keywords = $post['keywords'];
$page_canonical = rtrim(dw_site_url(), '/') . dw_blog_url($post['slug']);

$heroImage = dw_blog_image($post['images']['hero']);
$postUrl = dw_blog_url($post['slug']);
$latestPosts = array_slice(dw_blog_posts_sorted(), 0, 5);
$byService = dw_blog_posts_by_service();
$articleSchema = dw_blog_article_schema($post);

require_once __DIR__ . '/includes/helpers.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>
    <script type="application/ld+json"><?php echo $articleSchema; ?></script>
<!-- Banner Section Start -->
    <section class="breadcrumb-section position-relative fix">
        <div class="container">
            <div class="bread-content text-center">
                <ul class="d-flex align-items-center gap-3 justify-content-center flex-wrap">
                    <li><a href="/" class="p3-clr">Home</a></li>
                    <li class="p3-clr">/</li>
                    <li><a href="/blog" class="p3-clr">Blog</a></li>
                    <li class="p3-clr">/</li>
                    <li class="white"><?php echo e($post['service']); ?></li>
                </ul>
                <h1 class="white visible-from-right"><?php echo e($post['title']); ?></h1>
            </div>
        </div>
        <img loading="lazy" src="/assets/img/element/bread-ele.png" alt="" class="bread-ele">
    </section>

    <section class="blog-details-section fix section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="blog-details-left">
                        <div class="blog-details-box">
                            <div class="thumb1 rounded-3 w-100 mb-4">
                                <img loading="lazy" src="<?php echo e($heroImage); ?>"
                                    alt="<?php echo e($post['title']); ?>" class="w-100 rounded-3 blog-cover-img">
                            </div>
                            <div class="d-flex align-items-center gap-lg-4 gap-3 mb-lg-4 mb-3 flex-wrap wow fadeInUp"
                                data-wow-delay=".3s">
                                <div class="d-flex algin-items-center gap-2">
                                    <span class="badge bg-light text-dark text-uppercase fs-eight"><?php echo e($post['category']); ?></span>
                                </div>
                                <div class="d-flex algin-items-center gap-2">
                                    <i class="fa-regular fa-user black mt-1"></i>
                                    <p class="fs-eight pra mb-0"><?php echo e($post['author']); ?></p>
                                </div>
                                <div class="d-flex algin-items-center gap-2 blog-post-meta-date">
                                    <i class="fa-regular fa-clock black mt-1"></i>
                                    <time class="fs-eight pra" datetime="<?php echo e($post['published']); ?>"><?php echo e(dw_blog_format_date($post['published'])); ?></time>
                                </div>
                            </div>
<?php dw_render_blog_article($post); ?>
                            <div
                                class="tag-social-wrap d-flex justify-content-md-between flex-md-nowrap flex-wrap justify-content-center gap-3 align-items-center mb-lg-5 mb-4">
                                <div class="tags d-flex align-items-center gap-xxl-4 gap-xl-3 gap-2 flex-wrap">
                                    <h4 class="black mb-0">Tags:</h4>
                                    <ul class="tags mb-0">
<?php foreach ($post['tags'] as $tag) : ?>
                                        <li><a href="/blog"><?php echo e($tag); ?></a></li>
<?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="box border-top pt-4">
                                <h3 class="black mb-lg-3 mb-2">Discuss this topic with De-Weboo</h3>
                                <p class="fs-eight pra mb-4">
                                    Request a consultation on <?php echo e($post['service']); ?>—commercial projects or healthcare IT briefings.
                                </p>
                                <a href="/contact"
                                    class="common-btn box-style cmn-style1 d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden rounded-5 p3-bg">
                                    Contact De-Weboo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-details-right ps-xl-5">
                        <div class="details-common">
                            <h3 class="black mb-lg-4 mb-3 wow fadeInUp" data-wow-delay=".4s">Latest posts</h3>
                            <div class="blog-latest">
<?php foreach ($latestPosts as $i => $latest) :
    if ($latest['slug'] === $post['slug']) {
        continue;
    }
    $thumb = dw_blog_image($latest['images']['card']);
    ?>
                                <div class="blog-latest-item p-xxl-3 p-2 wow fadeInUp" data-wow-delay="<?php echo e((string) (0.4 + $i * 0.1)); ?>s">
                                    <div class="thumb rounded-2">
                                        <img loading="lazy" src="<?php echo e($thumb); ?>"
                                            alt="<?php echo e($latest['title']); ?>" class="rounded-2 blog-sidebar-thumb">
                                    </div>
                                    <div class="content">
                                        <a href="<?php echo e(dw_blog_url($latest['slug'])); ?>"
                                            class="fs-seven fw_500 d-block black mb-xl-2 mb-1">
                                            <?php echo e($latest['title']); ?>
                                        </a>
                                        <div class="d-flex align-items-center gap-2 blog-post-meta-date">
                                            <i class="fa-regular fa-clock pra"></i>
                                            <time datetime="<?php echo e($latest['published']); ?>"><?php echo e(dw_blog_format_date($latest['published'])); ?></time>
                                        </div>
                                    </div>
                                </div>
<?php endforeach; ?>
                            </div>
                        </div>
                        <div class="common-left-barbox">
                            <h4 class="black mb-xxl-4 mb-3">By service</h4>
                            <div class="d-grid gap-2">
<?php foreach ($byService as $serviceName => $servicePosts) :
    $first = $servicePosts[0];
    ?>
                                <a href="<?php echo e(dw_blog_url($first['slug'])); ?>"
                                    class="cate-tags d-flex align-items-center justify-content-between gap-2 fs-seven pra wow fadeInUp">
                                    <?php echo e($serviceName); ?>
                                    <span class="badge bg-light text-dark"><?php echo count($servicePosts); ?></span>
                                </a>
<?php endforeach; ?>
                            </div>
                        </div>
                        <div class="details-common category-blog">
                            <h3 class="black mb-lg-4 mb-3 visible-slowly-right">Topics</h3>
                            <ul class="tags">
                                <li><a href="/services">Web Development</a></li>
                                <li><a href="/services">Cloud Services</a></li>
                                <li><a href="/services">AI Automation</a></li>
                                <li><a href="/services">Healthcare IT</a></li>
                                <li><a href="/services">SEO &amp; AEO</a></li>
                                <li><a href="/contact">Get a Consultation</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
