<?php

declare(strict_types=1);
// This file does not contain the phone number.
$team_view_href = $team_view_href ?? 'team';
?>
<a href="<?php echo e($team_view_href); ?>"
    class="team-view-btn d-inline-flex align-items-center gap-2 fs-eight fw-semibold mt-3">
    View
    <i class="fa-solid fa-arrow-right"></i>
</a>
<?php unset($team_view_href); ?>
