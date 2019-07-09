(function ($) {

    "use strict";


    $('.ajax-popup-link').magnificPopup({
        type: 'ajax',
    });



    // PRE LOADER
    $(window).load(function () {
        $('.preloader').fadeOut(200); // set duration in brackets    
    });

    // SCROLLSPY
    if ($(window).width() >= 768) {
        $(function () {
            $('#scrollspy').navpoints({
                currentClass: 'active-scroll'
            });
        });

    }

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll < 250) {
            $(".nav-link").removeClass('active-scroll');
        }
    })


    // navigation Section
    // window.onscroll = function () {
    //     scrollFunction()
    // };

    // function scrollFunction() {
    //     if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    //         $(".navigation").addClass('nav-scrolled');
    //         console.log('hello');
    //     } else {
    //         $(".navigation").removeClass('nav-scrolled');
    //     }
    // }

    var $win = $(window);

    $win.scroll(function () {
        if ($win.scrollTop() == 0)
            $(".navigation").removeClass('nav-scrolled');
        else {
            $(".navigation").addClass('nav-scrolled');
        }
    });


    // Parallax Js
    function initParallax() {
        $('#home').parallax("50%", 50);
        $('#service').parallax("50%", 40);
        $('#about').parallax("50%", 20);
        $('#work').parallax("50%", 30);
        $('#contact').parallax("50%", 10);
    }
    initParallax();


    // smoothscroll js
    $(function () {
        $('#home a').bind('click', function (event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 49
            }, 1000);
            event.preventDefault();
        });
    });

    // WOW Animation js
    new WOW({
        mobile: false
    }).init();

})(jQuery);
