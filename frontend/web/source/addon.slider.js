/**
* @package Helix3 Framework
* @author JoomShaper http://www.joomshaper.com
* @copyright Copyright (c) 2010 - 2015 JoomShaper
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/

jQuery(document).ready(function($){'use strict';
    
    // Full width Slideshow
    var $slideFullwidth = $('#slide-fullwidth');

    // Autoplay
    var $autoplay   = $slideFullwidth.attr('data-sppb-slide-ride');
    if ($autoplay == 'true') { var $autoplay = true; } else { var $autoplay = false};

    // controllers
    var $controllers   = $slideFullwidth.attr('data-sppb-slide-controllers');
    if ($controllers == 'true') { var $controllers = true; } else { var $controllers = false};


    $slideFullwidth.owlCarousel({
        margin: 0,
        loop: true,
        autoplay: $autoplay,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        },
        dots: $controllers,
    });


    $('.sppbSlidePrev').click(function(){
        $slideFullwidth.trigger('prev.owl.carousel', [400]);
    });

    $('.sppbSlideNext').click(function(){
        $slideFullwidth.trigger('next.owl.carousel',[400]);
    });



    //Slideshow
    var $sppbSlider = $('.sppb-slider-items');

    // Autoplay
    var $autoplay   = $sppbSlider.attr('data-sppb-slide-ride');
    if ($autoplay == 'true') { var $autoplay = true; } else { var $autoplay = false;}

    // controllers
    var $controllers   = $sppbSlider.attr('data-sppb-slide-controllers');
    if ($controllers == 'true') { var $controllers = true; } else { var $controllers = false;}

    //Slider Options
    $sppbSlider.owlCarousel({
        animateOut: 'slideOutDown',
        animateIn: 'flipInX',
        loop: true,
        autoHeight: true,
        autoplay: $autoplay,
        center: true,
        nav: false,
        autoWidth: true,
        responsiveClass:true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        },
        dots: $controllers,
        
    });

    $('.sppbSlidePrev').click(function(){
        $sppbSlider.trigger('prev.owl.carousel');
    });

    $('.sppbSlideNext').click(function(){
        $sppbSlider.trigger('next.owl.carousel');
    });

});

