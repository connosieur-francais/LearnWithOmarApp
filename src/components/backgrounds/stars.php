<?php
/**
 * Function to generate random star positions for the box-shadow CSS.
 * This keeps the stars scattered uniquely but keeps the HTML tiny.
 */
function generateStars($count) {
    $shadows = [];
    for ($i = 0; $i < $count; $i++) {
        $x = rand(0, 100) . 'vw';
        $y = rand(0, 100) . 'vh';
        $blur = rand(1, 2) . 'px';
        $shadows[] = "$x $y $blur #fff";
    }
    return implode(', ', $shadows);
}

$smallStars = generateStars(200);
$mediumStars = generateStars(70);
?>

<div class="star-container">
    <div class="stars-small" style="box-shadow: <?php echo $smallStars; ?>;"></div>
    <div class="stars-medium" style="box-shadow: <?php echo $mediumStars; ?>;"></div>
</div>

<style>
/* Faint glow behind each star using a pseudo-element filter */
.stars-small::after, .stars-medium::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 1px;
    height: 1px;
    background: transparent;
    box-shadow: <?php echo $smallStars; ?>;
    filter: blur(4px);
    opacity: 0.4;
}
</style>