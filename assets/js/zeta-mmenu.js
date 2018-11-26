  var $menuTrigger = $('.hamburger');
  var $mobiNav = $('#mobiNav');
  var $openLevel = $('.menu-item-has-children > a:first-child');
  var $closeLevel = $('.closeLevel');
  var $closeLevelTop = $('.js-closeLevelTop');
  var $navLevel = $('.menu-item-has-children > ul');
  var self = this;
  this.$mobiNav = $mobiNav;
  this.$openLevel = $openLevel;

  function openPushNav() {
      this.$mobiNav.addClass('isOpen');
      $('body').addClass('pushNavIsOpen');
  }

  function closePushNav() {
      this.$mobiNav.removeClass('isOpen');
      this.$openLevel.siblings().removeClass('isOpen');
      $('body').removeClass('pushNavIsOpen');
  }

  this.$menuTrigger.on('click touchstart', function(e) {
      e.preventDefault();
      if ($mobiNav.hasClass('isOpen')) {
          self.closePushNav();
      } else {
          self.openPushNav();
      }
  });

  $($openLevel).on('click touchstart', function() { $(this).next($navLevel).addClass('isOpen'); });
  $($closeLevel).on('click touchstart', function() { $(this).closest($navLevel).removeClass('isOpen'); });
  $($menuTrigger).on('click touchstart', function() { $(this).closest($navLevel).removeClass('isOpen'); });
  $($closeLevelTop).on('click touchstart', function() { self.closePushNav(); });
  $('.mobi-nav-bg').click(function() { closePushNav(); });
  $('.menu-item-has-children > a:first-child').click(function() { return false; });

  //Hamburger menu
  $('.hamburger').click (function(){ $(this).addClass('burgerOpened'); });
  $('.mobi-nav-bg').on('click', function(){ $('#hamburger').removeClass('burgerOpened'); });
  
