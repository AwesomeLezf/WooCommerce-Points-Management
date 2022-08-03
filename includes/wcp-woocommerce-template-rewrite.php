<?php  

    add_action( 'woocommerce_proceed_to_checkout', function(){
        remove_action( 'woocommerce_proceed_to_checkout', 'woocommerce_button_proceed_to_checkout', 20 );
        $points = (int)do_shortcode('[wcp_get_field]');
        $cart_total =  WC()->cart->total;
        include dirname( __FILE__ ) . '/views/templates/proceed-to-checkout-button.php';
    }, 1 );


   