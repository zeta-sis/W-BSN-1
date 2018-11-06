
// Fixed logo on scrool & Scrool up on click
$(function() {
  $(window).scroll(function() {
    var winTop = $(window).scrollTop();
    if (winTop >= 160) {
      $("div.fix").addClass("sticky");
    } else {
      $("div.fix").removeClass("sticky");
    }
  });
$('div.fix a').click(function(){
$("html, body").animate({ scrollTop: 0 }, 500);
return false;
  })  
})

// Mobile Menu "mmenu"
$(function() {
  $('nav#menu').mmenu();
});

// Main Nav Stop Click
	$(function() {
	$('#menu-item-16 > a').click(function(e) { e.preventDefault(); });
});

$(document).ready(function(){
    $(".nav-tabs a").click(function(e){
      e.preventDefault();
        $(this).tab('show');
    });
});




// Slici Slider
 jQuery(document).ready(function($) {
 
  var SliceSlider = {
    
    /**
     * Settings Object
     */
    settings: {
      delta:              0,
      currentSlideIndex:  0,
      scrollThreshold:    40,
      slides:             $('.slide'),
      numSlides:          $('.slide').length,
      navPrev:            $('.js-prev'),
      navNext:            $('.js-next'),
    },
    
    /**
     * Init
     */
    init: function() {
      s = this.settings;
      this.bindEvents();
    },
    /**
     * Bind our click, scroll, key events
     */
     autoPlay: function()
    { 
        clearTimeout(this.timer);
        //auto play
        this.timer = setTimeout(function () {
            SliceSlider.nextSlide();
        }, 500)
     },
    bindEvents: function(){
      // On click prev
      s.navPrev.on({
        'click' : SliceSlider.prevSlide
      });
      // On click next
      s.navNext.on({
        'click' : SliceSlider.nextSlide
      });
      // On Arrow keys
      $(document).keyup(function(e) {
        // Left or back arrows
        if ((e.which === 37) ||  (e.which === 38)){
          SliceSlider.prevSlide();
        }
        // Down or right
        if ((e.which === 39) ||  (e.which === 40)) {
          SliceSlider.nextSlide();
        }
      });
    },
    /**
     * Show Slide
     */
    showSlide: function(){ 
      // reset
      s.delta = 0;
      // Bail if we're already sliding
      if ($('body').hasClass('is-sliding')){
        return;
      }
      // Loop through our slides
      s.slides.each(function(i, slide) {

        // Toggle the is-active class to show slide
        $(slide).toggleClass('is-active', (i === s.currentSlideIndex));                
        
        // Add and remove is-sliding class
        $('body').addClass('is-sliding');

        setTimeout(function(){
            $('body').removeClass('is-sliding');
        }, 1000);
      });
    },

    /**
     * Previous Slide
     */
    prevSlide: function(){
      
      // If on first slide, loop to last
      if (s.currentSlideIndex <= 0) {
        s.currentSlideIndex = s.numSlides;
      }
      s.currentSlideIndex--;
      
      SliceSlider.showSlide();
    },

    /**
     * Next Slide
     */
    nextSlide: function(){
      
      s.currentSlideIndex++;
   
      // If on last slide, loop to first
      if (s.currentSlideIndex >= s.numSlides) { 
        s.currentSlideIndex = 0;
      }
 
      SliceSlider.showSlide();
    },
  };
  SliceSlider.init();
  // Add Active Class
  $(function() {
      $(".slide").eq(0).addClass("is-active");
  });
})(jQuery);
