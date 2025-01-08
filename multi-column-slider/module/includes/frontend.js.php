<?php
$module_id = $settings->id;
$grid_column = $settings->grid_column;
$medium_grid_column = $settings->medium_grid_column;
$responsive_grid_column = $settings->responsive_grid_column;
$slider_options = $settings->arrows;
?>

(function($) {
    var initializeModule = function() {
        var moduleContainer = $('#fl-node-<?php echo $module_id; ?>');

        var slides = <?php echo json_encode($settings->slides); ?>;
        slides.forEach(function(slide) {
            var image = slide.image,
                description = slide.description,
                singleLineText = slide.single_line_text,
                ctaLink = slide.cta_link;

            var slideContent = '<div class="slide">' +
                '<img src="' + image.url + '" alt="Slide Image">' +
                '<div class="single-line-text">' + singleLineText + '</div>' +
                '<div class="description">' + description + '</div>' +
                '<a href="' + ctaLink + '">Read More</a>' +
                '</div>';

            moduleContainer.append(slideContent);
        });
    };

    jQuery(document).ready(function($) {
        initializeModule();

        var gridColumn = <?php echo $grid_column; ?>;
        var mediumGridColumn = <?php echo $medium_grid_column; ?>;
        var responsiveGridColumn = <?php echo $responsive_grid_column; ?>;

        var arrowsEnabled = <?php echo ($slider_options === 'true') ? 'true' : 'false'; ?>;

        var prevArrowMarkup = arrowsEnabled ? '<div class="slick-prev"></div>' : '';
        var nextArrowMarkup = arrowsEnabled ? '<div class="slick-next"></div>' : '';

        $('.slick-slider').slick({
            slidesToShow: gridColumn,
            slidesToScroll: 1,
            autoplay: true,
            dots: true,
            arrows: arrowsEnabled,
            prevArrow: prevArrowMarkup,
            nextArrow: nextArrowMarkup,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: mediumGridColumn,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: responsiveGridColumn,
                    }
                }
            ]
        });
});
    
})(jQuery);