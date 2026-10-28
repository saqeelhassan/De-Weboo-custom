<?php
declare(strict_types=1);

/** Disabled by default. Supply only approved, genuine ratings also rendered visibly. */
function dw_review_schema(array $config, string $organizationId): ?array
{
    if (empty($config['enabled']) || empty($config['reviews'])) { return null; }
    $reviews = [];
    foreach ($config['reviews'] as $review) {
        if (empty($review['verified']) || empty($review['author']) || empty($review['body']) || !isset($review['rating']) || $review['rating'] < 1 || $review['rating'] > 5) { return null; }
        $reviews[] = ['@type' => 'Review', 'author' => ['@type' => 'Person', 'name' => $review['author']], 'reviewBody' => $review['body'], 'reviewRating' => ['@type' => 'Rating', 'ratingValue' => $review['rating'], 'bestRating' => 5, 'worstRating' => 1]];
    }
    return ['@id' => $organizationId, 'review' => $reviews, 'aggregateRating' => ['@type' => 'AggregateRating', 'ratingValue' => array_sum(array_column($config['reviews'], 'rating')) / count($reviews), 'reviewCount' => count($reviews), 'bestRating' => 5, 'worstRating' => 1]];
}

function dw_render_review_component(array $config): void
{
    if (dw_review_schema($config, 'https://deweboo.com/#organization') === null) { return; }
    echo '<section class="section-padding"><div class="container"><h2 class="black mb-4">Verified client reviews</h2>';
    foreach ($config['reviews'] as $review) {
        echo '<figure class="mb-4"><blockquote><p>' . e($review['body']) . '</p></blockquote><figcaption>' . e($review['author']) . ' — ' . e((string) $review['rating']) . '/5</figcaption></figure>';
    }
    echo '</div></section>';
}
