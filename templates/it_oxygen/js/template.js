(function ($) {
    'use strict';


    jQuery.each($('.slide'), function (index, val) {
        $(this).find('.bt_img').addClass('slider-image');
        $(this).find('img').css('opacity', '0');
        $(this).find('.bt_img').css({
            'background-image': 'url("' + $(this).find('img').prop('src') + '")'
        });
    });

    // Move the Offcanvas Toggle button in the Header
    $(document).ready(function () {
        $("div.g-offcanvas-toggle:not(.offcanvas-toggle-particle)").prependTo($("#g-header"));
    });


    // baguetteBox.run('.gallery');
})(jQuery);

/* edited by urmi */
( function( $ ) {

    // Setup variables
    $window = $(window);
    $slide = $('.platform-content');
    $body = $('body');

    //FadeIn all sections
    $body.imagesLoaded( function() {
        setTimeout(function() {

            // Resize sections
            adjustWindow();

            // Fade in sections
            $body.addClass('loaded');

        }, 800);
    });

    function adjustWindow(){

        // Init Skrollr


        // Get window size
        winH = $window.height();

        // Keep minimum height 550
        if(winH <= 550) {
            winH = 550;
        }

        // Resize our slides
        $slide.height(winH);

        // Refresh Skrollr after resizing our sections


    }

} )( jQuery );

/* edited by urmi */


