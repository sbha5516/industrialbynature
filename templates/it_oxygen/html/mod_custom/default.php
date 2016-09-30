<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_custom
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>


<div data-scroll-speed="10" class="custom<?php echo $moduleclass_sfx ?>" <?php if ($params->get('backgroundimage')) : ?> style="background-image:url(<?php echo $params->get('backgroundimage');?>)"<?php endif;?> >
    <?php echo $module->content;?>
</div>

<?php  if(JRequest::getVar('view') == "custom" ) { ?>
    <style>
        .stick {
            position: fixed;
            top: 0;

        }
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>

    <script>
        /*
         $(function() {

         var timer, el = $('.custom.area_block'),
         flag = false;
         $(window).scroll(function() {
         if (!flag) {
         flag = true;
         el.addClass('animate-area');
         }
         clearTimeout(timer);
         timer = setTimeout(function() {
         el.removeClass('animate-area');
         flag = false;
         }, 200);
         });

         });*/
        /*
         jQuery(document).ready(function () {
         jQuery(window).scroll(function () {
         var u = jQuery(this).scrollTop();
         $window = $(window);
         if ($window.scrollTop() > 0) {

         jQuery(document).ready(function () {
         var $horizontal = jQuery('.hori');

         jQuery(window).scroll(function () {
         var s = jQuery(this).scrollTop(),
         d = jQuery(document).height(),
         c = jQuery(this).height();

         scrollPercent = (s / (d - c));

         var position = (scrollPercent * (jQuery(document).width() + $horizontal.width()));
         //alert(position);
         $horizontal.css({
         'background-position': position
         });
         });
         });
         }  if ($window.scrollTop() > 695) {
         jQuery(document).ready(function () {
         var $horizontal = jQuery('.hori1');

         jQuery(window).scroll(function () {
         var s = jQuery(this).scrollTop(),
         d = jQuery(document).height(),
         c = jQuery(this).height();

         scrollPercent = (s / (d - c));

         var position = (scrollPercent * (jQuery(document).width() + $horizontal.width()));
         //alert(position);

         $horizontal.css({
         'background-position': -position
         });

         });
         });
         }*/
        jQuery(document).ready(function () {

            jQuery(window).scroll(function () {
                var u = jQuery(this).scrollTop();
                $window = $(window);
                if ($window.scrollTop() > 0) {

                    jQuery(document).ready(function () {
                        var $horizontal = jQuery('.move_right');

                        jQuery(window).scroll(function () {
                            var s = jQuery(this).scrollTop(),
                                d = jQuery(document).height(),
                                c = jQuery(this).height();

                            scrollPercent = (s / (d - c));

                            var position = (scrollPercent * (jQuery(document).width() + $horizontal.width()));
                            //alert(position);
                            $horizontal.css({
                                'right': -position
                            });
                        });
                    });
                }  /*if ($window.scrollTop() > 400) {
                 jQuery(document).ready(function () {
                 var $horizontal1 = jQuery('.hori1');

                 jQuery(window).scroll(function () {
                 var s1 = jQuery(this).scrollTop(),
                 d1 = jQuery(document).height(),
                 c1 = jQuery(this).height();

                 scrollPercent1 = (s1 / (d1 - c1));

                 var position1 = (scrollPercent1 * (jQuery(document).width() + $horizontal1.width()));
                 //alert(position);

                 $horizontal1.css({
                 'background-position-y': -position1

                 });

                 });
                 });
                 } */
                if ($window.scrollTop() > 1300) {
                    $(document).ready(function() {
                        // Cache selectors for faster performance.
                        var $window = $(window),
                            $mainMenuBar = $('.move_top'),
                            $mainMenuBarAnchor = 1300;


                        s = jQuery(this).scrollTop(),
                            d = jQuery(document).height(),
                            c = jQuery(this).height();

                        scrollPercent = (s / (d - c));

                        var position = (scrollPercent * (jQuery(document).width() + $mainMenuBar.width()));


                        // Run this on scroll events.
                        $window.scroll(function() {
                            var window_top = $window.scrollTop();
                            var div_top = 1300;
                            if (window_top > div_top) {
                                // Make the div sticky.
                                $mainMenuBar.addClass('stick');
                                $mainMenuBarAnchor.height($mainMenuBar.height());
                            }
                            else {
                                // Unstick the div.
                                $mainMenuBar.removeClass('stick');
                                $mainMenuBarAnchor.height(0);
                            }
                        });
                    });
                    /*
                     var lastScrollTop = 0;
                     jQuery(window).scroll(function (event) {
                     var st = $(this).scrollTop();
                     // alert(st);
                     if (1200 > lastScrollTop) {
                     $('.move_top').animate({top: '20px'}, 2);
                     }if (st < 600) {
                     $('.move_top').animate({bottom: '20px'}, 2);
                     }
                     lastScrollTop = st;
                     });*/
                }
                /*
                 if ($window.scrollTop() > 1300) {
                 jQuery(document).ready(function () {
                 var $horizontal = jQuery('.move_top');

                 jQuery(window).scroll(function () {
                 var s = jQuery(this).scrollTop(),
                 d = jQuery(document).height(),
                 c = jQuery(this).height();

                 scrollPercent = (s / (d - c));

                 var position = (scrollPercent * (jQuery(document).width() + $horizontal.width()));
                 //alert(position);
                 $horizontal.css({
                 'background-position': position
                 });
                 });
                 });
                 }*/
            });
        });
    </script>
<?php } ?>
