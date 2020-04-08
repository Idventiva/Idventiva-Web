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
    jQuery('.blade, .menu ul li, .upper, .lower,   .social-networks-nav, nav .menu').toggleClass('hidden');
    // Click en botón
    jQuery('#nav-button').click(function(){
      jQuery(this).toggleClass('open');
      jQuery('.blade, .menu ul li, .upper, .lower,   .social-networks-nav, nav .menu').toggleClass('hidden');
    });
  });


