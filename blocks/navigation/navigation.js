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