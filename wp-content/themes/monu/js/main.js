(function ($) {
	"use strict";

   //sticky menu
   $(window).on('scroll', function(){
    var scroll=$(window).scrollTop();
    if(scroll<1){
        $(".sticky").removeClass("scroll-header");
    }
    else{
        $(".sticky").addClass("scroll-header");
    }
   })


    //slider
    $('.slider__active').owlCarousel({
        loop:true,
        margin:10,
        dots:false,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            },
            1200:{
                items:1
            },
            1920:{
                items:1
            }
        }
        
    })


    // Counter up

    $('.counter').counterUp();


    //testimonial
    $('.testimonial__active').owlCarousel({
        loop:true,
        margin:0,
        dots:true,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            },
            1200:{
                items:1
            },
            1920:{
                items:1
            }
        }
        
    });
        //testimonial
        $('.brand__active').owlCarousel({
            loop:true,
            margin:20,
            dots:true,
            nav:false,
            responsive:{
                0:{
                    items:3
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                },
                1200:{
                    items:5
                },
                1920:{
                    items:5
                }
            }
            
        });

    //menu
    $('#mobile__menu__active').meanmenu({
        meanMenuContainer:'.mobile__menu',
        meanScreenWidth:"991",
        meanMenuClose:"X",
        meanMenuOpen: "<span></span><span></span><span></span >"


    });


      
})(jQuery);