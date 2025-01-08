<?php
// Retrieve the module settings
$slides = $settings->slides;
$grid_column = $settings->grid_column;
$medium_grid_column = $settings->medium_grid_column;
$responsive_grid_column = $settings->responsive_grid_column;
$module_arrows_enabled = ($settings->arrows === 'true');
$module_dots_enabled = ($settings->dots === 'true'); 
$arrow_color = $settings->arrow_color;
$dot_color = $settings->dot_color;
?>

<div class="fl-multi-column-slider">
    <div class=" slick-slider" data-grid-column="<?php echo $grid_column; ?>">
        <?php foreach ($slides as $slide) : ?>
            <div class="slide">
                <?php if (!empty($slide->image)) : ?>
                    <img src="<?php echo wp_get_attachment_url($slide->image); ?>" alt="Slide Image">
                <?php endif; ?>
                <div class="single-line-text"><?php echo $slide->single_line_text; ?></div>
                <div class="description"><?php echo $slide->description; ?></div>
                <a href="<?php echo $slide->cta_link; ?>">Read More</a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
    <?php if ($module_arrows_enabled) : ?>
        <div class="slick-prev"></div>
        <div class="slick-next"></div>
    <?php endif; ?>
    <?php if ($module_dots_enabled) : ?>
        <div class="slick-dots"></div>
    <?php endif; ?>

<script>
jQuery(document).ready(function($) {
    var gridColumn = $('.slick-slider').data('grid-column');
    var mediumGridColumn = '<?php echo $medium_grid_column; ?>';
    var responsiveGridColumn = '<?php echo $responsive_grid_column; ?>';


    $('.slick-slider').slick({
        slidesToShow: parseInt(gridColumn),
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: <?php echo ($module_dots_enabled ? 'true' : 'false'); ?>,
        arrows: <?php echo ($module_arrows_enabled ? 'true' : 'false'); ?>,
        prevArrow: '<div class="slick-prev"><i class="fas fa-arrow-left"></i></div>',
        nextArrow: '<div class="slick-next"><i class="fas fa-arrow-right"></i></div>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: parseInt(mediumGridColumn),
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: parseInt(responsiveGridColumn),
                }
            }
        ]
    });
});
</script>
