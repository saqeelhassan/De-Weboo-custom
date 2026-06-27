<?php

declare(strict_types=1);

require_once __DIR__ . '/helpers.php';
require_once __DIR__ . '/seo-config.php';
require_once __DIR__ . '/mail.php';

/**
 * @return array<string, array{
 *     title: string,
 *     seo_slug: string,
 *     intro: string,
 *     sections: list<array{heading: string, body: string, list?: list<string>}>,
 *     cta_label?: string,
 *     cta_href?: string
 * }>
 */
function dw_support_pages(): array
{
    $org = dw_org_config();
    $tel = $org['telephone'];
    $telDisplay = $org['telephoneDisplay'];
    $email = $org['email'];
    $whatsappUrl = 'https://wa.me/' . preg_replace('/\D+/', '', $tel);

    return [
        'client-support' => [
            'title' => 'Client Support',
            'seo_slug' => 'client-support',
            'intro' => 'Dedicated support for active De-Weboo clients across software delivery, cloud infrastructure, and Growth & Infrastructure engagements.',
            'sections' => [
                [
                    'heading' => 'Who this is for',
                    'body' => 'Client support is available to organizations with an active statement of work, maintenance agreement, or managed services plan with De-Weboo.',
                ],
                [
                    'heading' => 'What we help with',
                    'body' => 'Our support team assists with production issues, release coordination, hosting and uptime questions, and post-launch enhancements scoped under your agreement.',
                    'list' => [
                        'Bug triage and priority incident response',
                        'Deployment, staging, and environment access',
                        'CMS, dashboard, and integration troubleshooting',
                        'Security patching and backup verification',
                        'SLED and healthcare compliance documentation requests',
                    ],
                ],
                [
                    'heading' => 'Response expectations',
                    'body' => 'Response times depend on your support tier and severity level. Critical production outages are prioritized. For new project inquiries, use our general contact form instead.',
                ],
                [
                    'heading' => 'How to reach support',
                    'body' => 'Email your project reference, environment URL, and a clear description of the issue. Include screenshots or logs when available so we can resolve faster.<br><br><strong>Phone:</strong> <a href="tel:' . e($tel) . '" class="p1-clr">' . e($telDisplay) . '</a><br><strong>Email:</strong> <a href="mailto:' . e($email) . '" class="p1-clr">' . e($email) . '</a><br><strong>WhatsApp:</strong> <a href="' . e($whatsappUrl) . '" target="_blank" rel="noopener noreferrer" class="p1-clr">' . e($telDisplay) . '</a>',
                ],
            ],
            'cta_label' => 'Contact client support',
            'cta_href' => 'contact.php',
        ],
        'help-center' => [
            'title' => 'Help Center',
            'seo_slug' => 'help-center',
            'intro' => 'Quick answers and resources for working with De-Weboo—from discovery and procurement to launch and ongoing care.',
            'sections' => [
                [
                    'heading' => 'Getting started',
                    'body' => 'New to De-Weboo? Review our services, portfolio, and FAQs to understand how we deliver custom software, AI automation, data engineering, and Growth & Infrastructure programs.',
                    'list' => [
                        'Browse <a href="services.php" class="p1-clr">Services</a> for capability areas and NAICS alignment',
                        'Read <a href="faqs.php" class="p1-clr">FAQs</a> for process, timelines, and procurement questions',
                        'View <a href="portfolio.php" class="p1-clr">Portfolio</a> case studies by industry and delivery type',
                    ],
                ],
                [
                    'heading' => 'Common topics',
                    'body' => 'Most visitors find answers in these areas before opening a ticket.',
                    'list' => [
                        'Requesting a capability statement or SLED documentation',
                        'HIPAA-aligned hosting and medical system requirements',
                        'Multilingual websites and international SEO programs',
                        'Cloud migration, CI/CD, and managed hosting',
                        'Digital marketing, lead generation, and analytics setup',
                    ],
                ],
                [
                    'heading' => 'Still need help?',
                    'body' => 'If you cannot find what you need, contact our team with your organization name, project goals, and preferred timeline. We respond to qualified inquiries within one business day.<br><br><strong>Phone:</strong> <a href="tel:' . e($tel) . '" class="p1-clr">' . e($telDisplay) . '</a><br><strong>Email:</strong> <a href="mailto:' . e($email) . '" class="p1-clr">' . e($email) . '</a><br><strong>WhatsApp:</strong> <a href="' . e($whatsappUrl) . '" target="_blank" rel="noopener noreferrer" class="p1-clr">' . e($telDisplay) . '</a>',
                ],
            ],
            'cta_label' => 'Contact De-Weboo',
            'cta_href' => 'contact.php',
        ],
        'system-status' => [
            'title' => 'System Status',
            'seo_slug' => 'system-status',
            'intro' => 'Current operational status for De-Weboo-managed platforms and public website services.',
            'sections' => [
                [
                    'heading' => 'Overall status',
                    'body' => '<span class="badge rounded-pill text-bg-success me-2">Operational</span> All monitored De-Weboo services are running normally as of the last review.',
                ],
                [
                    'heading' => 'Monitored services',
                    'body' => 'Status overview for core systems we operate for clients and public properties.',
                    'list' => [
                        'De-Weboo website — Operational',
                        'Client production hosting (managed cloud) — Operational',
                        'Staging & deployment pipelines — Operational',
                        'Backup & disaster-recovery jobs — Operational',
                        'Email & notification delivery — Operational',
                    ],
                ],
                [
                    'heading' => 'Maintenance windows',
                    'body' => 'Scheduled maintenance is communicated to affected clients in advance. Emergency maintenance may be performed to protect security or data integrity.',
                ],
                [
                    'heading' => 'Report an incident',
                    'body' => 'Active clients experiencing a production outage should contact client support immediately with severity, affected URL, and steps to reproduce.',
                ],
            ],
            'cta_label' => 'Report an issue',
            'cta_href' => 'client-support.php',
        ],
        'feedback' => [
            'title' => 'Feedback',
            'seo_slug' => 'feedback',
            'intro' => 'We welcome feedback on our delivery, communication, and website experience. Your input helps us improve every engagement.',
            'sections' => [
                [
                    'heading' => 'Share your experience',
                    'body' => 'Tell us what went well, what we can improve, or ideas for future collaboration. Constructive feedback from clients and partners is reviewed by our leadership team.',
                ],
                [
                    'heading' => 'What to include',
                    'body' => 'Helpful feedback usually includes the project or page referenced, your role, and specific outcomes or suggestions.',
                    'list' => [
                        'Project name or engagement reference (if applicable)',
                        'Team members you worked with',
                        'What exceeded expectations or needs improvement',
                        'Permission to follow up by email or phone',
                    ],
                ],
                [
                    'heading' => 'Testimonials',
                    'body' => 'If you would like your feedback featured as a client testimonial, let us know in your message. We never publish quotes without written approval.',
                ],
                [
                    'heading' => 'Send feedback',
                    'body' => 'Use the form below to share your experience. We read every message and respond when follow-up is requested.',
                ],
            ],
            'show_cta' => false,
        ],
        'terms-and-conditions' => [
            'title' => 'Terms & Condition',
            'seo_slug' => 'terms-and-conditions',
            'intro' => 'These terms govern use of the De-Weboo website and general engagement with our services. Project-specific contracts, statements of work, and procurement agreements take precedence where signed.',
            'sections' => [
                [
                    'heading' => '1. Acceptance of terms',
                    'body' => 'By accessing deweboo.com or contacting De-Weboo, you agree to these Terms & Condition. If you do not agree, please do not use this website.',
                ],
                [
                    'heading' => '2. Services',
                    'body' => 'De-Weboo provides enterprise software engineering, AI automation, data engineering, digital marketing, SEO, and cloud services. Scope, fees, and deliverables for paid work are defined in separate written agreements.',
                ],
                [
                    'heading' => '3. Website use',
                    'body' => 'You may not misuse the site, attempt unauthorized access, scrape content for competitive reuse, or submit unlawful material through our forms. Content on this site is owned by De-Weboo or used with permission.',
                ],
                [
                    'heading' => '4. Intellectual property',
                    'body' => 'Unless otherwise agreed in writing, custom work product ownership and license terms are specified in each client contract. Pre-existing tools, frameworks, and methodologies remain De-Weboo property.',
                ],
                [
                    'heading' => '5. Confidentiality & data',
                    'body' => 'Information submitted through contact forms is handled according to our <a href="privacy-policy.php" class="p1-clr">Privacy Policy</a>. Confidential client data shared under NDA or contract is protected per the applicable agreement.',
                ],
                [
                    'heading' => '6. Limitation of liability',
                    'body' => 'To the fullest extent permitted by law, De-Weboo is not liable for indirect or consequential damages arising from use of this website. Service warranties and liability caps for paid engagements are defined in signed contracts.',
                ],
                [
                    'heading' => '7. Changes',
                    'body' => 'We may update these terms periodically. Continued use of the website after changes are posted constitutes acceptance of the revised terms.',
                ],
            ],
            'cta_label' => 'Questions about these terms',
            'cta_href' => 'contact.php',
        ],
    ];
}

function dw_support_page(string $slug): ?array
{
    $pages = dw_support_pages();

    return $pages[$slug] ?? null;
}

function dw_process_feedback_form(array $form): array
{
    if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST' || !isset($_POST['feedback_form'])) {
        return ['form' => $form, 'alert' => null];
    }

    if (!empty($_POST['website'])) {
        return [
            'form' => [
                'name' => '',
                'email' => '',
                'phone' => '',
                'organization' => '',
                'topic' => '',
                'message' => '',
                'testimonial_ok' => false,
            ],
            'alert' => [
                'type' => 'success',
                'message' => 'Thank you. Your feedback has been received.',
            ],
        ];
    }

    $form = [
        'name' => trim((string) ($_POST['feedback_name'] ?? '')),
        'email' => trim((string) ($_POST['feedback_email'] ?? '')),
        'phone' => trim((string) ($_POST['feedback_phone'] ?? '')),
        'organization' => trim((string) ($_POST['feedback_organization'] ?? '')),
        'topic' => trim((string) ($_POST['feedback_topic'] ?? '')),
        'message' => trim((string) ($_POST['feedback_message'] ?? '')),
        'testimonial_ok' => !empty($_POST['feedback_testimonial_ok']),
    ];

    $errors = [];

    if ($form['name'] === '') {
        $errors[] = 'Full name is required.';
    }

    if ($form['email'] === '' || !filter_var($form['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'A valid email is required.';
    }

    if ($form['topic'] === '') {
        $errors[] = 'Please select a feedback topic.';
    }

    if ($form['message'] === '') {
        $errors[] = 'Please enter your feedback message.';
    }

    if ($errors !== []) {
        return [
            'form' => $form,
            'alert' => [
                'type' => 'danger',
                'message' => implode(' ', $errors),
            ],
        ];
    }

    $subject = 'Website feedback — ' . $form['topic'];

    $bodyLines = [
        'New feedback from deweboo.com',
        '',
        'Topic: ' . $form['topic'],
        'Testimonial approval requested: ' . ($form['testimonial_ok'] ? 'Yes' : 'No'),
        '',
        'Contact',
        'Name: ' . $form['name'],
        'Email: ' . $form['email'],
        'Phone: ' . ($form['phone'] !== '' ? $form['phone'] : '—'),
        'Organization / project: ' . ($form['organization'] !== '' ? $form['organization'] : '—'),
        '',
        'Feedback:',
        $form['message'],
        '',
        'Submitted: ' . gmdate('Y-m-d H:i:s') . ' UTC',
    ];

    $sent = dw_send_inbound_mail(
        $subject,
        implode("\n", $bodyLines),
        $form['name'],
        $form['email'],
        'De-Weboo Feedback'
    );

    if (!$sent) {
        return [
            'form' => $form,
            'alert' => [
                'type' => 'danger',
                'message' => 'We could not send your feedback right now. Please email us at ' . dw_primary_inbound_email() . ' directly.',
            ],
        ];
    }

    return [
        'form' => [
            'name' => '',
            'email' => '',
            'phone' => '',
            'organization' => '',
            'topic' => '',
            'message' => '',
            'testimonial_ok' => false,
        ],
        'alert' => [
            'type' => 'success',
            'message' => 'Thank you. Your feedback has been received and will be reviewed by our team.',
        ],
    ];
}

function dw_render_feedback_form(array $form, ?array $alert): void
{
    $phonePlaceholder = dw_org_config()['telephoneDisplay'];
    ?>
                        <div class="feedback-form-wrap mt-2 pt-2">
                            <h2 class="black fs-five fw-bold mb-3">Feedback form</h2>
<?php if ($alert !== null) : ?>
                            <div class="alert alert-<?php echo $alert['type'] === 'success' ? 'success' : 'danger'; ?> mb-4" role="alert">
                                <?php echo e($alert['message']); ?>
                            </div>
<?php endif; ?>
                            <form method="post" action="<?php echo e($_SERVER['PHP_SELF'] ?? 'feedback.php'); ?>" class="row g-4" id="feedback-form" novalidate>
                                <input type="hidden" name="feedback_form" value="1">
                                <input type="text" name="website" value="" class="portfolio-discuss-honeypot" tabindex="-1" autocomplete="off" aria-hidden="true">

                                <div class="col-md-6 contact-from-grp">
                                    <label class="form-label fs-eight fw-semibold black" for="feedback_name">Full name *</label>
                                    <input type="text" name="feedback_name" id="feedback_name" required placeholder="Your full name"
                                        value="<?php echo e($form['name']); ?>" autocomplete="name">
                                </div>
                                <div class="col-md-6 contact-from-grp">
                                    <label class="form-label fs-eight fw-semibold black" for="feedback_email">Email *</label>
                                    <input type="email" name="feedback_email" id="feedback_email" required placeholder="you@company.com"
                                        value="<?php echo e($form['email']); ?>" autocomplete="email">
                                </div>
                                <div class="col-md-6 contact-from-grp">
                                    <label class="form-label fs-eight fw-semibold black" for="feedback_phone">Phone / WhatsApp</label>
                                    <input type="tel" name="feedback_phone" id="feedback_phone" placeholder="<?php echo e($phonePlaceholder); ?>"
                                        value="<?php echo e($form['phone']); ?>" autocomplete="tel">
                                </div>
                                <div class="col-md-6 contact-from-grp">
                                    <label class="form-label fs-eight fw-semibold black" for="feedback_organization">Organization / project</label>
                                    <input type="text" name="feedback_organization" id="feedback_organization" placeholder="Company or project reference"
                                        value="<?php echo e($form['organization']); ?>">
                                </div>
                                <div class="col-12 contact-from-grp">
                                    <label class="form-label fs-eight fw-semibold black" for="feedback_topic">Feedback topic *</label>
                                    <select name="feedback_topic" id="feedback_topic" class="portfolio-discuss-select" required>
                                        <option value="">Select a topic</option>
<?php
    $topics = [
        'General feedback',
        'Website experience',
        'Project delivery',
        'Communication & support',
        'Testimonial / review',
        'Other',
    ];
    foreach ($topics as $topic) :
        ?>
                                        <option value="<?php echo e($topic); ?>"<?php echo $form['topic'] === $topic ? ' selected' : ''; ?>><?php echo e($topic); ?></option>
<?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-12 contact-from-grp">
                                    <label class="form-label fs-eight fw-semibold black" for="feedback_message">Your feedback *</label>
                                    <textarea name="feedback_message" id="feedback_message" rows="5" required
                                        placeholder="Tell us what went well, what we can improve, or ideas for future collaboration."><?php echo e($form['message']); ?></textarea>
                                </div>
                                <div class="col-12">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" name="feedback_testimonial_ok" id="feedback_testimonial_ok" value="1"<?php echo !empty($form['testimonial_ok']) ? ' checked' : ''; ?>>
                                        <label class="form-check-label fs-eight pra" for="feedback_testimonial_ok">
                                            I give permission for De-Weboo to contact me and use my feedback as a testimonial with my approval.
                                        </label>
                                    </div>
                                    <p class="pra fs-eight mb-3">
                                        We protect your data and never publish quotes without written approval. See our <a href="privacy-policy.php" class="p1-clr">Privacy Policy</a>.
                                    </p>
                                    <button type="submit"
                                        class="border-0 common-btn box-style cmn-style1 d-inline-flex justify-content-center align-items-center gap-2 fs18 fw-semibold white overflow-hidden rounded-5 p3-bg">
                                        Send feedback
                                        <i class="fa-solid fa-paper-plane"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
    <?php
}

function dw_render_support_page(string $slug, ?array $feedbackForm = null, ?array $feedbackAlert = null): void
{
    $page = dw_support_page($slug);
    if ($page === null) {
        header('Location: index.php', true, 302);
        exit;
    }

    ?>
    <section class="breadcrumb-section position-relative fix">
        <div class="container">
            <div class="bread-content text-center">
                <ul class="d-flex align-items-center gap-3 justify-content-center">
                    <li><a href="index.php" class="p3-clr">Home</a></li>
                    <li class="p3-clr">/</li>
                    <li class="white"><?php echo e($page['title']); ?></li>
                </ul>
                <h1 class="white visible-from-right"><?php echo e($page['title']); ?></h1>
            </div>
        </div>
        <img loading="lazy" src="assets/img/element/bread-ele.png" alt="" class="bread-ele">
    </section>

    <section class="blog-details-section fix section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="blog-details-left">
                        <p class="pra fs-seven mb-4"><?php echo e($page['intro']); ?></p>

<?php foreach ($page['sections'] as $section) : ?>
                        <div class="mb-4">
                            <h2 class="black fs-five fw-bold mb-3"><?php echo e($section['heading']); ?></h2>
                            <p class="pra mb-0"><?php echo $section['body']; ?></p>
<?php if (!empty($section['list'])) : ?>
                            <ul class="about-list d-grid gap-2 mt-3 mb-0">
<?php foreach ($section['list'] as $item) : ?>
                                <li class="d-flex gap-2">
                                    <span class="icon mt-1 d-center"><i class="fa-solid fa-check p1-clr fs-eight"></i></span>
                                    <p class="fs-seven fw_600 black mb-0"><?php echo $item; ?></p>
                                </li>
<?php endforeach; ?>
                            </ul>
<?php endif; ?>
                        </div>
<?php endforeach; ?>

<?php if ($slug === 'feedback' && $feedbackForm !== null) : ?>
                        <?php dw_render_feedback_form($feedbackForm, $feedbackAlert); ?>
<?php elseif (($page['show_cta'] ?? true) !== false) : ?>
                        <div class="mb-0">
                            <a href="<?php echo e($page['cta_href'] ?? 'contact.php'); ?>"
                                class="common-btn box-style cmn-style1 d-inline-flex justify-content-center align-items-center gap-2 fs18 fw-semibold white overflow-hidden rounded-5 p3-bg">
                                <?php echo e($page['cta_label'] ?? 'Contact De-Weboo'); ?>
                            </a>
                        </div>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
}
