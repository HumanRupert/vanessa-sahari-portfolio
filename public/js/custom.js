(function ($) {

  "use strict";


  $('.ajax-popup-link').magnificPopup({
    type: 'ajax',
  });



  // PRE LOADER
  $(window).load(function () {
    $('.preloader').fadeOut(800); // set duration in brackets    
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
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll > 80) {
      $(".navigation").addClass('nav-scrolled');
    } else {
      $(".navigation").removeClass('nav-scrolled');
    }
  })


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