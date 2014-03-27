jQuery(document).ready(function() {
    var offset = 220;
    var duration = 400;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('#smoothup').fadeIn(duration);
        } else {
            jQuery('#smoothup').fadeOut(duration);
        }
    });
    
    jQuery('#smoothup').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
});