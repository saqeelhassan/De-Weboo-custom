<?php

declare(strict_types=1);

if (!function_exists('dw_blog_posts_sorted')) {
    require_once __DIR__ . '/blog-posts.php';
}

/** @var list<array<string, mixed>> $blogSectionPosts */
$blogSectionPosts = $blogSectionPosts ?? array_slice(dw_blog_posts_sorted(), 0, 3);
?>
    <section class="news-section section-padding fix">
        <div class="container">
            <div class="section-title mb-60 text-center">
                <span class="sub-badge p1-clr fw-semibold fs-seven text-uppercase d-block mb-2">
                    OUR LATEST BLOG POST
                </span>
                <h2 class="wow fadeInUp black fw-bold visible-slowly-right" data-wow-delay=".3s">
                    Latest insights from our team
                </h2>
            </div>
            <div class="news-wrapper">
                <div class="row justify-content-center g-4">
<?php
$blogDelay = 0.3;
foreach ($blogSectionPosts as $blogPost) :
    $blogCardImage = dw_blog_image($blogPost['images']['card']);
    $blogPostUrl = dw_blog_url($blogPost['slug']);
    $publishedTs = strtotime($blogPost['published']);
    $dayLabel = $publishedTs !== false ? date('j', $publishedTs) : '';
    $monthLabel = $publishedTs !== false ? date('M', $publishedTs) : '';
    ?>
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="<?php echo e((string) $blogDelay); ?>s">
                        <div class="news-single-items style3 rounded-3 p-xxl-0 p-0 border overflow-hidden style1 h-100">
                            <a href="<?php echo e($blogPostUrl); ?>"
                                class="news-image position-relative d-block rounded-3 overflow-hidden">
                                <img loading="lazy" src="<?php echo e($blogCardImage); ?>"
                                    alt="<?php echo e($blogPost['title']); ?>"
                                    class="rounded-3 overflow-hidden w-100 blog-cover-img">
                                <span
                                    class="m-lg-3 m-sm-2 m-1 trns blog-badge1 position-absolute top-0 start-0 z-1 fw_500 bg-white d-inline-block py-xl-2 py-2 px-3 rounded-1 text-uppercase fs-eight black">
                                    <?php echo e($dayLabel); ?>
                                    <span><?php echo e($monthLabel); ?></span>
                                </span>
                            </a>
                            <div class="news-content pb-4 mb-lg-2 px-4">
                                <h4 class="mb-0 blog-card-title">
                                    <a href="<?php echo e($blogPostUrl); ?>" class="black">
                                        <?php echo dw_blog_card_title($blogPost['title']); ?>
                                    </a>
                                </h4>
                                <p class="fs-seven pra blog-card-excerpt">
                                    <?php echo e($blogPost['excerpt']); ?>
                                </p>
                                <div class="blog-card-footer d-flex align-items-center justify-content-between flex-wrap gap-2">
                                    <a href="<?php echo e($blogPostUrl); ?>"
                                        class="common-btn box-style py-2 fs-seven cmn-style1 d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold black overflow-hidden rounded-1 bg-color">
                                        Read More
                                    </a>
                                    <div class="d-flex fw_500 align-items-center gap-1 pra fs-eight heading-font blog-post-meta-date">
                                        <i class="fa-regular fa-clock black"></i>
                                        <time datetime="<?php echo e($blogPost['published']); ?>"><?php echo e(dw_blog_format_date($blogPost['published'])); ?></time>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<?php
    $blogDelay += 0.2;
endforeach;
?>
                </div>
            </div>
        </div>
    </section>
