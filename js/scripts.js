(function ($, root, undefined) {

	$(function () {

		'use strict';

		// DOM ready, take it away

	});

})(jQuery, this);



jQuery(document).ready(function(){
  // Add smooth scrolling to all links
  jQuery("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      jQuery('html, body').animate({
        scrollTop: jQuery(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});

// Función del Menu


  jQuery(document).ready(function(){
    // Preparando el terreno
    jQuery('.blade, .main-menu ul li, .upper, .lower, .social-networks-nav, nav .main-menu').toggleClass('hidden'); // Lanza la animación de las cuchillas al inicio
    jQuery('.prepare').removeClass('prepare'); // Oculta los elementos de menú al cargar, excepto las cuchillas.
    // Click en botón
    jQuery('#nav-button').click(function(){
      jQuery(this).toggleClass('open');
      jQuery('.top-bar').toggleClass('over-all'); // Activa la clase over-all, que evita que el menú desaparezca en el scroll. 
      jQuery('.blade, .main-menu ul li, .upper, .lower, .social-networks-nav, nav .main-menu').toggleClass('hidden');
    });
  });

// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 300;
var delta = 5;
var navbarHeight = jQuery('.top-bar').outerHeight();

jQuery(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = jQuery(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        jQuery('.top-bar').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + jQuery(window).height() < jQuery(document).height()) {
          jQuery('.top-bar').removeClass('nav-up').addClass('nav-down');
        }
    }
    
    lastScrollTop = st;
}

