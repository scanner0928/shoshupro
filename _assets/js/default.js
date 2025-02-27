jQuery(function ($) {
  siteHeader = $(".homeHeader");
  siteFooter = $("#siteFooter");
  sNav = $('#sNav');
  menuToggle = $('#toggle-siteNavi');
  menuBody = $("#siteNavi");
  controlBtn = $('#menuToggle--pagetop');
  sliderHome = $('.slider-wrap');

  hH = siteHeader.outerHeight();

  gmInit();

  $(window).scroll(function () {
    if ($(this).scrollTop() > siteHeader.outerHeight()) {
      $('body').addClass('--scrolled');
    } else {
      $('body').removeClass('--scrolled');
    }
  });

  function gmInit() {
    menuToggle.on("click", function () {
      $('body').toggleClass("is-active");
      $(this).toggleClass("is-active");
      menuBody.toggleClass("is-active");
    });


    /* tel */
    var ua = navigator.userAgent.toLowerCase();
    var isMobile = /iphone/.test(ua) || /android(.+)?mobile/.test(ua);

    if (!isMobile) {
      $('a[href^="tel:"]').on('click', function (e) {
        e.preventDefault();
      });
    }

  }

});