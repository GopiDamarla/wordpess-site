<?php
//register pickup delivery checkout page block
function register_pickup_delivery_block(){
    register_block_type(
        'wpc/pickup-delivery', array(
			'editor_script' => 'wpc-block-js',
            'render_callback'	=> 'wpc_pickup_delivery_callback',
            'api_version'       => 1,
            'attributes'        => array()
        )
    );

if(is_checkout()){
		wp_enqueue_script('frontend-js-block-pickup', \Wpcafe::assets_url() . 'js/wpc-block-pickup.js', [ 'jquery', 'wpc-pro-widgets-modal-script', 'jquery-timepicker', 'wp-blocks', 'wp-components', 'wp-element', 'wp-i18n' ], \Wpcafe::version());
	}	

}
add_action('init', 'register_pickup_delivery_block');

// pickup delivery checkout page block callback
function wpc_pickup_delivery_callback() {
    //check if woocommerce exists
    if ( ! class_exists( 'Woocommerce' ) ) { return; }
    
    return do_shortcode( '[wpc_pickup_delivery_checkout]' );
}

