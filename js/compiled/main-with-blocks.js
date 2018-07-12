jQuery(document).ready(function() {
  $('.owl-carousel').owlCarousel({
  autoplay: true,
  autoplayTimeout: 2000,
  autoplayHoverPause: true,
  center: false,
  autoWidth: true,
  loop: true,
  margin: 10,
  responsiveClass: true,
  responsive: {
    0: {
      items: 1,
      nav: true,
      center: true
    },
    650: {
      items: 3,
      nav: true
    }
  }
});
console.log('yep yep');
'use strict';
jQuery(document).ready(function () {
// navigation / mobile hamburger menu
  jQuery('.navbar-burger').click(function(){
    jQuery(this).toggleClass('is-active');
    jQuery('.navbar-menu').slideToggle();
  });

// STICKY NAV

  var mn = jQuery('.sticky-nav');
  var header = jQuery('.header').height() - 30;

  jQuery(window).scroll(function() {
    if( jQuery(this).scrollTop()) {
      mn.addClass('sticky');
      jQuery('body').addClass('sticky');
    } else {
      mn.removeClass('sticky');
      jQuery('body').removeClass('sticky');
    }
  });

  // 

  if (jQuery(window).width() < 769) {
    function primary_menu_sticky() {
      var mobileMenu = jQuery('.header');
      var mobileNavTop = mobileMenu.height();
      function mobileStickyNav() {
        var scrollTop = jQuery(window).scrollTop();
        if (scrollTop > mobileNavTop) {
          mobileMenu.addClass('fixed');
        } else {
          mobileMenu.removeClass('fixed');
        }
      }

      mobileStickyNav();
      jQuery(window).scroll(function() {
        mobileStickyNav();
      });
    }
    primary_menu_sticky();


    function secondary_mobile_menu_sticky() {
      var mobileMenu = jQuery('.header');
      var innerMenu = jQuery('.inner-header');
      var mobileNavTop = mobileMenu.height() + innerMenu.height();
      function mobileStickyNav() {
        var scrollTop = jQuery(window).scrollTop();
        if (scrollTop > mobileNavTop) {
          jQuery('.header').addClass('secondary-mobile-nav');
        } else {
          jQuery('.header').removeClass('secondary-mobile-nav');
        }
      };
      mobileStickyNav();
      jQuery(window).scroll(function() {
        mobileStickyNav();
      });
    }
    secondary_mobile_menu_sticky();
  }

  function secondary_menu_sticky() {
    var mobileMenu = jQuery('.header');
    var innerMenu = jQuery('.inner-header');
    var mobileNavTop = mobileMenu.height() + innerMenu.height();
    function mobileStickyNav() {
      var scrollTop = jQuery(window).scrollTop();
      if (scrollTop > mobileNavTop) {
        jQuery('.sticky-nav').addClass('secondary-nav');
      } else {
        jQuery('.sticky-nav').removeClass('secondary-nav');
      }
    }

    mobileStickyNav();
    jQuery(window).scroll(function() {
      mobileStickyNav();
    });
  }
  secondary_menu_sticky();



  // navigation / mobile hamburger menu
  jQuery('.navbar-burger').click(function () {
    jQuery(this).toggleClass('is-active');
    jQuery('.navbar-menu').slideToggle();
  });

  var el = jQuery(this);

  jQuery('<span class=></span>').appendTo('.menu-item-has-children');
  function mobileSubMenu(el) {
    var subMenu = el.parent().find('.sub-menu');
    var allSubs = jQuery('.navbar-menu').find('.sub-menu');
    if (el.hasClass('open')) {
      el.removeClass('open');
      allSubs.slideUp();
    } else {
      allSubs.parent().find('span').removeClass('open');
      allSubs.slideUp();
      el.addClass('open');
      subMenu.slideDown();
    }
  };

  jQuery('.menu-item-has-children > span').bind({
    'click': function () {
      mobileSubMenu(jQuery(this));
    }
  });
});
$(document).ready(function () {

  var getMax = function () {
    return $(document).height() - $(window).height();
  }

  var getValue = function () {
    return $(window).scrollTop();
  }

  if ('max' in document.createElement('progress')) {
    // Browser supports progress element
    var progressBar = $('progress');

    // Set the Max attr for the first time
    progressBar.attr({ max: getMax() });

    $(document).on('scroll', function () {
      // On scroll only Value attr needs to be calculated
      progressBar.attr({ value: getValue() });
    });

    $(window).resize(function () {
      // On resize, both Max/Value attr needs to be calculated
      progressBar.attr({ max: getMax(), value: getValue() });
    });
  }
  else {
    var progressBar = $('.progress-bar'),
      max = getMax(),
      value, width;

    var getWidth = function () {
      // Calculate width in percentage
      value = getValue();
      width = (value / max) * 100;
      width = width + '%';
      return width;
    }

    var setWidth = function () {
      progressBar.css({ width: getWidth() });
    }

    $(document).on('scroll', setWidth);
    $(window).on('resize', function () {
      // Need to reset the Max attr
      max = getMax();
      setWidth();
    });
  }

  $('#flat').addClass("active");
  $('#progressBar').addClass('flat');

  $(document).on('scroll', function () {

    maxAttr = $('#progressBar').attr('max');
    valueAttr = $('#progressBar').attr('value');
    percentage = (valueAttr / maxAttr) * 100;

    if (percentage < 49) {
      document.styleSheets[0].addRule('.semantic', 'color: red');
      document.styleSheets[0].addRule('.semantic::-webkit-progress-value', 'background-color: red');
      document.styleSheets[0].addRule('.semantic::-moz-progress-bar', 'background-color: red');
    }
    else if (percentage < 98) {
      document.styleSheets[0].addRule('.semantic', 'color: orange');
      document.styleSheets[0].addRule('.semantic::-webkit-progress-value', 'background-color: orange');
      document.styleSheets[0].addRule('.semantic::-moz-progress-bar', 'background-color: orange');
    }
    else {
      document.styleSheets[0].addRule('.semantic', 'color: green');
      document.styleSheets[0].addRule('.semantic::-webkit-progress-value', 'background-color: green');
      document.styleSheets[0].addRule('.semantic::-moz-progress-bar', 'background-color: green');
    }
  });
});
'use strict';
jQuery(document).ready(function () {
  // FORM SUBMISSIONS - SEARCH
  jQuery('#searchsubmit').click(function() {
      jQuery('#searchform').submit();
  });

  jQuery('.search').on('click',function(e){
    e.preventDefault();
    jQuery(this).closest('.search-container').toggleClass('active');
  });
});
});