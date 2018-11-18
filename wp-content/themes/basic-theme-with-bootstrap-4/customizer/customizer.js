jQuery(function($){
    wp.customize( 'phone', function( value ) {
        value.bind( function(val) {
            $('.header-top-contacts-phone').text(val);
        });
    });
    wp.customize( 'email', function( value ) {
        value.bind( function(val) {
            $('.header-top-contacts-email').text(val);
        });
    });
});