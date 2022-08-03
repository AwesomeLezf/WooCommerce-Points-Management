<?php 

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

include_once plugin_dir_path(__FILE__).'/wcp-woocommerce-template-rewrite.php';   


//Add filter to rewrite order button
add_filter( 'woocommerce_order_button_text', function(){
    return __( 'I order', 'wc-points-menagement' ); 
});

// Register shortcode that display additional plugin field, points by default
add_shortcode( 'wcp_get_field', function($_atts){
    $defaults = array(
        'user_id' => get_current_user_id(),
        'field_key' => 'points',
    );
    $atts = shortcode_atts( $defaults, $_atts );
    // Confirm that $post_id is an integer.
    $atts['user_id'] = absint( $atts['user_id'] );
    
    return esc_attr(get_user_meta($atts['user_id'], $atts['field_key'] )[0]);
});


//Register shortcode that return user point history
add_shortcode( 'wcp_get_history', function($_atts){
    $defaults = array(
        'user_id' => get_current_user_id(),
        'single_data' => 'false',
    );
    $atts = shortcode_atts( $defaults, $_atts );
    $wcp_db = new WCP_Database_Menager();
    $points_history = $wcp_db->get_history($atts['user_id']);
    if($atts['single_data'] === 'false'){
        include dirname( __FILE__ ) . '/views/theme-template/shortcode-history.php';
    }
    else{
       return $points_history;
    }
});


// When new order came subtract points from user
add_action( 'woocommerce_new_order', function( $order_id, $order ){
    $user_id = $order->customer_id;
    $order_id_parse = (int)$order_id;
    $order_total_parse = (int)$order->total;
    $message = __('Oreder number #', 'wc-points-menagement').$order_id_parse;
    
    $points = (int)do_shortcode('[wcp_get_field]');
    $new_points = $points - $order_total_parse;
    update_user_meta($user_id , 'points', $new_points);

    $wcp_db = new WCP_Database_Menager();
    $wcp_db->insert_data($user_id, $order_total_parse, $message, 0);
}, 10, 2 );

// Add redeirect if user have no enought points
add_action( 'template_redirect', function(){
    if((int)get_the_ID() === wc_get_page_id('checkout')){
        $points = (int)do_shortcode('[wcp_get_field]');
        $cart_total = WC()->cart->total;

        if( $points < $cart_total){
            wc_add_notice( __( 'Checkout is not available whilst you have no enought points.', 'wc-points-menagement' ), 'notice' );
            wp_safe_redirect( wc_get_cart_url() );
            exit;
        }
    }
} ); 


?>