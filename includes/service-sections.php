<?php
require_once __DIR__ . '/service-content.php';
require_once __DIR__ . '/blog-posts.php';
require_once __DIR__ . '/portfolio-projects.php';
$serviceSlug = basename((string) ($_SERVER['SCRIPT_NAME'] ?? ''), '.php');
if ($serviceSlug === 'services-details') { $serviceSlug = 'web-development'; }
$service = dw_service_content()[$serviceSlug] ?? null;
if ($service !== null):
?>
<section class="section-padding service-content-sections">
    <div class="container">
<?php foreach (['included' => "What's included", 'process' => 'Process', 'tools' => 'Tools / Tech stack', 'results' => 'Results'] as $key => $label): ?>
        <div class="mb-5">
            <h2 class="black mb-3"><?php echo e($label); ?></h2>
            <p class="pra"><?php echo e($service[$key] ?: '[Content placeholder: approved ' . strtolower($label) . ' copy for ' . $service['name'] . ' will be supplied.]'); ?></p>
        </div>
<?php endforeach; ?>
        <div class="mb-5"><h2 class="black mb-3">FAQs</h2>
<?php if ($service['faqs'] === []): ?>
            <p class="pra">[Content placeholder: approved service questions and answers will be supplied.]</p>
<?php else: foreach ($service['faqs'] as $faq): ?>
            <h3 class="black"><?php echo e($faq['question']); ?></h3><p class="pra"><?php echo e($faq['answer']); ?></p>
<?php endforeach; endif; ?>
        </div>
<?php foreach (['Related case studies' => dw_portfolio_projects(), 'Related blog posts' => dw_blog_posts()] as $label => $items):
    $related = array_filter($items, static fn(array $item): bool => dw_content_matches_service($item, $serviceSlug)); ?>
        <div class="mb-5"><h2 class="black mb-3"><?php echo e($label); ?></h2>
<?php if ($related === []): ?><p class="pra">[Content placeholder: tag matching content to add related links.]</p>
<?php else: ?><ul>
<?php foreach ($related as $item):
    $isBlog = isset($item['published']);
    $url = $isBlog ? dw_blog_url($item['slug']) : dw_portfolio_url($item['slug']); ?>
            <li><a class="p1-clr" href="<?php echo e($url); ?>"><?php echo e($item['title'] ?? $item['shortName']); ?></a></li>
<?php endforeach; ?></ul><?php endif; ?>
        </div>
<?php endforeach; ?>
        <div class="box border-top pt-4"><h2 class="black mb-3">Discuss your project</h2><a class="common-btn p3-bg white rounded-5" href="/contact">Request a consultation</a></div>
    </div>
</section>
<?php endif; ?>
