<?php

declare(strict_types=1);

/**
 * Render blog article body (sections + FAQs) for blog-details.php.
 *
 * @param array<string, mixed> $post
 */
function dw_render_blog_article(array $post): void
{
    ?>
                            <div class="mb-4 pb-xl-2">
                                <h2 class="mb-xxl-4 mb-3 wow fadeInUp fs-four black" data-wow-delay=".4s">
                                    <?php echo e($post['title']); ?>
                                </h2>
                                <p class="mb-xxl-3 mb-2 pra fs-six wow fadeInUp fw-semibold" data-wow-delay=".45s">
                                    <?php echo e($post['intro']); ?>
                                </p>
                            </div>
    <?php
    foreach ($post['sections'] as $section) {
        if (!empty($section['heading'])) {
            ?>
                            <div class="mb-lg-5 mb-4">
                                <h3 class="black mb-xxl-3 mb-2"><?php echo e($section['heading']); ?></h3>
            <?php
        }
        if (!empty($section['paragraphs'])) {
            foreach ($section['paragraphs'] as $paragraph) {
                ?>
                                <p class="pra mb-3"><?php echo e($paragraph); ?></p>
                <?php
            }
        }
        if (!empty($section['list'])) {
            ?>
                                <ul class="about-list d-grid gap-lg-3 gap-2 mb-0">
            <?php
            foreach ($section['list'] as $item) {
                ?>
                                    <li class="d-flex gap-2">
                                        <span class="icon mt-1 d-center">
                                            <i class="fa-solid fa-check p1-clr fs-eight"></i>
                                        </span>
                                        <p class="fs-seven fw_600 black mb-0"><?php echo e($item); ?></p>
                                    </li>
                <?php
            }
            ?>
                                </ul>
            <?php
        }
        if (!empty($section['heading'])) {
            ?>
                            </div>
            <?php
        }
    }

    if (!empty($post['faqs'])) {
        ?>
                            <div class="mb-lg-5 mb-4">
                                <h3 class="black mb-xxl-3 mb-2">Frequently asked questions</h3>
                                <div class="accordion" id="blogFaqAccordion">
        <?php
        foreach ($post['faqs'] as $i => $faq) {
            $collapseId = 'blogFaq' . $i;
            $expanded = $i === 0 ? 'true' : 'false';
            $showClass = $i === 0 ? ' show' : '';
            ?>
                                    <div class="accordion-item border rounded-3 mb-2 overflow-hidden">
                                        <h4 class="accordion-header" id="heading<?php echo e($collapseId); ?>">
                                            <button class="accordion-button<?php echo $i === 0 ? '' : ' collapsed'; ?> fs-seven fw_600 black"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#<?php echo e($collapseId); ?>"
                                                aria-expanded="<?php echo e($expanded); ?>"
                                                aria-controls="<?php echo e($collapseId); ?>">
                                                <?php echo e($faq['question']); ?>
                                            </button>
                                        </h4>
                                        <div id="<?php echo e($collapseId); ?>"
                                            class="accordion-collapse collapse<?php echo $showClass; ?>"
                                            aria-labelledby="heading<?php echo e($collapseId); ?>"
                                            data-bs-parent="#blogFaqAccordion">
                                            <div class="accordion-body pra fs-seven">
                                                <?php echo e($faq['answer']); ?>
                                            </div>
                                        </div>
                                    </div>
        <?php
        }
        ?>
                                </div>
                            </div>
        <?php
    }
}

/**
 * @param array<string, mixed> $post
 */
function dw_blog_article_schema(array $post): string
{
    require_once __DIR__ . '/seo-config.php';
    $org = dw_org_config();
    $url = rtrim(dw_site_url(), '/') . '/' . dw_blog_url($post['slug']);
    $imagePath = dw_blog_image($post['images']['hero']);
    $imageUrl = rtrim(dw_site_url(), '/') . '/' . ltrim($imagePath, '/');

    $faqEntities = [];
    foreach ($post['faqs'] ?? [] as $faq) {
        $faqEntities[] = [
            '@type' => 'Question',
            'name' => $faq['question'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $faq['answer'],
            ],
        ];
    }

    $graph = [
        [
            '@type' => 'BlogPosting',
            '@id' => $url . '#article',
            'headline' => $post['title'],
            'description' => $post['excerpt'],
            'image' => $imageUrl,
            'datePublished' => $post['published'],
            'dateModified' => $post['published'],
            'author' => [
                '@type' => 'Organization',
                'name' => $post['author'],
                'url' => $org['url'],
            ],
            'publisher' => [
                '@type' => 'Organization',
                'name' => $org['name'],
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => $org['logo'],
                ],
            ],
            'mainEntityOfPage' => $url,
            'articleSection' => $post['service'],
            'keywords' => implode(', ', $post['tags']),
            'inLanguage' => 'en-US',
            'about' => [
                '@type' => 'Service',
                'name' => $post['service'],
                'provider' => ['@type' => 'Organization', 'name' => $org['name']],
            ],
        ],
    ];

    if ($faqEntities !== []) {
        $graph[] = [
            '@type' => 'FAQPage',
            '@id' => $url . '#faq',
            'mainEntity' => $faqEntities,
        ];
    }

    $schema = [
        '@context' => 'https://schema.org',
        '@graph' => $graph,
    ];

    return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?: '{}';
}
