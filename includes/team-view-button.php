<?php

declare(strict_types=1);

$team_view_href = $team_view_href ?? 'team.php';
?>
<a href="<?php echo e($team_view_href); ?>"
    class="team-view-btn d-inline-flex align-items-center gap-2 fs-eight fw-semibold mt-3">
    View
    <i class="fa-solid fa-arrow-right"></i>
</a>
<?php unset($team_view_href); ?>
