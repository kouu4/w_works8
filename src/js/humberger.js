
jQuery("#openbtn").click(function () {
    jQuery(this).toggleClass('active');

    if ( jQuery(this).hasClass('active') ) {
        jQuery('#overlay').fadeIn(200);
        jQuery('#menu').fadeIn(220); // #overlayと出現にラグをつける
    } else {
        jQuery('#overlay').fadeOut(200);
        jQuery('#menu').fadeOut(200);
    }

});