jQuery(window).scroll(function() {
    parallax();
})

function parallax() {
    var wScroll = jQuery(window).scrollTop();

    jQuery('.bg--parallax').css('background-position' , 'center '+((wScroll*0.5-100)+'px'));
}



jQuery(window).scroll(function() {
    parallaxSmooth();
})

function parallaxSmooth() {
    var wScroll = jQuery(window).scrollTop();

    jQuery('.bg--parallax-smooth').css('background-position' , 'center '+((wScroll*0.2-100)*(-1))+'px');
}



jQuery(window).scroll(function() {
    parallaxBig();
})

function parallaxBig() {
    var wScroll = jQuery(window).scrollTop();

    jQuery('.bg--parallax-big').css('background-position' , 'center '+((wScroll*0.5-200)+'px'));
}
