<?php

declare(strict_types=1);

/**
 * Client testimonials — USA leadership & portfolio-aligned quotes.
 *
 * @return list<array{quote: string, role: string, name: string}>
 */
function dw_client_testimonials(): array
{
    return [
        [
            'quote' => 'De-Weboo strengthened EZ Falcons with technical SEO and marketing that drives qualified corporate inquiries across the U.S. market.',
            'role' => 'CEO · EZ Falcons · Arizona, USA',
            'name' => 'Dara',
        ],
        [
            'quote' => 'From audit to launch, De-Weboo helped us rank for high-intent keywords and turn organic traffic into booked discovery calls.',
            'role' => 'CEO · EZ Falcons · Arizona, USA',
            'name' => 'Dara',
        ],
        [
            'quote' => 'New Super Prime was built fast and multilingual—De-Weboo delivered a premium site without page-builder bloat.',
            'role' => 'CEO · New Super Prime · KSA',
            'name' => 'Pervez Iqbal',
        ],
        [
            'quote' => 'De-Weboo led our SEO and multilingual discoverability with clean technical work for international buyers.',
            'role' => 'CEO · New Super Prime · KSA',
            'name' => 'Pervez Iqbal',
        ],
        [
            'quote' => 'Their team handled performance, security, and content structure so our catalog loads quickly on mobile worldwide.',
            'role' => 'CEO · New Super Prime · KSA',
            'name' => 'Pervez Iqbal',
        ],
        [
            'quote' => 'Clear milestones, weekly updates, and a polished storefront—we launched on schedule with zero last-minute surprises.',
            'role' => 'CEO · New Super Prime · KSA',
            'name' => 'Pervez Iqbal',
        ],
        [
            'quote' => 'De-Weboo rebuilt our patient intake flow with HIPAA-aware hosting and a faster, more accessible front end.',
            'role' => 'Operations Director · Dallas, TX, USA',
            'name' => 'Marcus Reed',
        ],
        [
            'quote' => 'They mapped our scope to NAICS codes and delivered procurement-ready web assets our agency could sign off on.',
            'role' => 'Program Manager · Richmond, VA, USA',
            'name' => 'Jennifer Walsh',
        ],
        [
            'quote' => 'Our cloud migration and CI/CD pipeline cut release risk—De-Weboo kept engineering and DevOps aligned throughout.',
            'role' => 'CTO · Seattle, WA, USA',
            'name' => 'Robert Chen',
        ],
        [
            'quote' => 'Lead quality improved within weeks after they rebuilt our landing pages, tracking, and paid-media handoffs.',
            'role' => 'VP Marketing · Denver, CO, USA',
            'name' => 'Amanda Foster',
        ],
    ];
}

/**
 * @param array{quote: string, role: string, name: string} $item
 */
function dw_render_testimonial_card(array $item, string $wrapperClass = 'col-md-6 col-lg-4', string $wowDelay = '.3s'): void
{
    ?>
    <div class="<?php echo e($wrapperClass); ?> wow fadeInUp" data-wow-delay="<?php echo e($wowDelay); ?>">
        <div class="testimonial-items05">
            <div class="boxes">
                <div class="d-flex align-items-center gap-2 mb-4">
                    <i class="fa-solid fa-star fs-six p2-clr"></i>
                    <i class="fa-solid fa-star fs-six p2-clr"></i>
                    <i class="fa-solid fa-star fs-six p2-clr"></i>
                    <i class="fa-solid fa-star fs-six p2-clr"></i>
                    <i class="fa-solid fa-star fs-six p2-clr"></i>
                </div>
                <p class="pra"><?php echo e($item['quote']); ?></p>
                <div class="d-flex align-items-center gap-xxl-4 gap-xl-3 gap-3">
                    <div class="cont">
                        <p class="fs-eight mb-1 p1-clr d-block"><?php echo e($item['role']); ?></p>
                        <h6 class="black fw-six"><?php echo e($item['name']); ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}

/**
 * @param array{quote: string, role: string, name: string} $item
 */
function dw_render_testimonial_slide(array $item): void
{
    ?>
    <div class="swiper-slide">
        <div class="testimonial-items05">
            <div class="boxes">
                <div class="d-flex align-items-center gap-2 mb-4">
                    <i class="fa-solid fa-star fs-six p2-clr"></i>
                    <i class="fa-solid fa-star fs-six p2-clr"></i>
                    <i class="fa-solid fa-star fs-six p2-clr"></i>
                    <i class="fa-solid fa-star fs-six p2-clr"></i>
                    <i class="fa-solid fa-star fs-six p2-clr"></i>
                </div>
                <p class="pra"><?php echo e($item['quote']); ?></p>
                <div class="d-flex align-items-center gap-xxl-4 gap-xl-3 gap-3">
                    <div class="cont">
                        <p class="fs-eight mb-1 p1-clr d-block"><?php echo e($item['role']); ?></p>
                        <h6 class="black fw-six"><?php echo e($item['name']); ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
