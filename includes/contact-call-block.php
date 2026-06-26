<?php

declare(strict_types=1);

require_once __DIR__ . '/seo-config.php';

$org = dw_org_config();
$call_theme = $call_theme ?? 'light';
$call_wrapper_class = $call_wrapper_class ?? 'about-call d-flex align-items-center gap-3';

$label_class = $call_theme === 'dark' ? 'fs-seven white75 d-block' : 'fs-seven pra d-block';
$number_class = $call_theme === 'dark' ? 'fs-six white fw-semibold d-block' : 'fs-six black fw-semibold d-block';
$whatsapp_class = $call_theme === 'dark' ? 'fs-six white fw-semibold' : 'fs-six black fw-semibold';
$tel = $org['telephone'];
$tel_display = $org['telephoneDisplay'];
$whatsapp_url = 'https://wa.me/' . preg_replace('/\D+/', '', $tel);
?>
<div class="<?php echo e($call_wrapper_class); ?>">
    <div class="icon p3-bg d-center rounded-circle">
        <i class="fa-solid fa-phone-volume fs-six white"></i>
    </div>
    <div class="cont">
        <span class="<?php echo e($label_class); ?>">Call us today</span>
        <a href="tel:<?php echo e($tel); ?>" class="<?php echo e($number_class); ?>">
            <?php echo e($tel_display); ?>
        </a>
        <span class="<?php echo e($label_class); ?> mt-2">WhatsApp us</span>
        <a href="<?php echo e($whatsapp_url); ?>" target="_blank" rel="noopener noreferrer" class="<?php echo e($whatsapp_class); ?>">
            <?php echo e($tel_display); ?>
        </a>
    </div>
</div>
