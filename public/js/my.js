//hidden element when size small
var width = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
var rightMenu = document.getElementById("right-menu");
var col = document.getElementById("col-width");
if(width <= 992) {
  rightMenu.style.display = "none";
  col.classList.remove("col-md-8");
  col.classList.add("col-md-12");
}


//fade in scroll
$(document).ready(function() {
    
  /* Every time the window is scrolled ... */
  $(window).scroll( function(){
  
      /* Check the location of each desired element */
      $('#service').each( function(i){
          
          var bottom_of_object = $(this).offset().top + $(this).outerHeight();
          var bottom_of_window = $(window).scrollTop() + $(window).height();
          
          /* If the object is completely visible in the window, fade it it */
          if( bottom_of_window > bottom_of_object ){
              
              $(this).animate({'opacity':'1'},1800);
                  
          }
          
      }); 
  
  });

  //slide down
  $(".header-content").slideDown(1200);
      
});

$(document).ready(function() {
  $('.progress-bar').waypoint(function() {
    $('.progress-bar').css({
      animation: "animate-positive 2s",
      opacity: "1"
    });
    }, { offset: '75%' });
});


(function($) {

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 54
  });

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

})(jQuery); // End of use strict


