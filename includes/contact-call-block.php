<?php

declare(strict_types=1);

require_once __DIR__ . '/seo-config.php';

$org = dw_org_config();
$call_theme = $call_theme ?? 'light';
$call_wrapper_class = $call_wrapper_class ?? 'about-call d-flex align-items-center gap-3';
$call_show_rep = $call_show_rep ?? false;
$call_show_numbers = $call_show_numbers ?? !$call_show_rep;

$label_class = $call_theme === 'dark' ? 'fs-seven white75 d-block' : 'fs-seven pra d-block';
$number_class = $call_theme === 'dark'
    ? 'fs-six white fw-semibold d-block contact-phone-link'
    : 'fs-six black fw-semibold d-block contact-phone-link';
$whatsapp_class = $call_theme === 'dark'
    ? 'fs-six white fw-semibold contact-phone-link'
    : 'fs-six black fw-semibold contact-phone-link';

$rep = dw_contact_rep();
$call_rep_name = $call_rep_name ?? ($call_show_rep ? $rep['name'] : '');
$call_rep_title = $call_rep_title ?? ($call_show_rep ? $rep['title'] : '');
$call_rep_image = $call_rep_image ?? ($call_show_rep ? '/' . ltrim($rep['image'], '/') : '');

$tel = $org['telephone'];
$tel_display = $org['telephoneDisplay'];
$tel_pk = $org['telephonePK'];
$tel_pk_display = $org['telephonePKDisplay'];
$whatsapp = $org['whatsapp'];
$whatsapp_display = $org['whatsappDisplay'];
$whatsapp_url = 'https://wa.me/' . preg_replace('/\D+/', '', $whatsapp);
?>
<div class="<?php echo e($call_wrapper_class); ?>">
    <?php if ($call_rep_image !== '') : ?>
    <img loading="lazy" src="<?php echo e($call_rep_image); ?>" alt="<?php echo e($call_rep_name); ?>, <?php echo e($call_rep_title); ?>" class="techgon-author rounded-circle flex-shrink-0">
    <?php endif; ?>
    <a href="<?php echo e($whatsapp_url); ?>" target="_blank" rel="noopener noreferrer" class="icon p3-bg d-center rounded-circle flex-shrink-0 contact-whatsapp-icon" aria-label="WhatsApp us at <?php echo e($whatsapp_display); ?>">
        <i class="fa-solid fa-phone-volume fs-six white"></i>
    </a>
    <div class="cont">
        <?php if ($call_rep_name !== '') : ?>
        <div class="contact-rep-heading mb-2">
            <span class="black fw-semibold fs-six d-block contact-rep-name"><?php echo e($call_rep_name); ?></span>
            <?php if ($call_rep_title !== '') : ?>
            <span class="fs-seven pra d-block"><?php echo e($call_rep_title); ?></span>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        <?php if ($call_show_numbers) : ?>
        <span class="<?php echo e($label_class); ?>">Call us today</span>
        <a href="tel:<?php echo e($tel); ?>" class="<?php echo e($number_class); ?>">
            <?php echo e($tel_display); ?>
        </a>
        <a href="tel:<?php echo e($tel_pk); ?>" class="<?php echo e($number_class); ?>">
            <?php echo e($tel_pk_display); ?>
        </a>
        <span class="<?php echo e($label_class); ?> mt-2">WhatsApp us</span>
        <a href="<?php echo e($whatsapp_url); ?>" target="_blank" rel="noopener noreferrer" class="<?php echo e($whatsapp_class); ?>">
            <?php echo e($whatsapp_display); ?>
        </a>
        <?php endif; ?>
    </div>
</div>
<?php
unset($call_theme, $call_wrapper_class, $call_show_rep, $call_show_numbers, $call_rep_name, $call_rep_title, $call_rep_image);
