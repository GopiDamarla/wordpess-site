<?php
//register location checkout page block
function register_location_block(){
    register_block_type(
        'wpc/location', array(
            'editor_script' => 'wpc-block-js',
            'render_callback'	=> 'wpc_location_callback',
            'api_version'       => 1,
            'attributes'        => array()
        )
    );

	if(is_checkout()){
		wp_enqueue_script('frontend-js-block-location', \Wpcafe::assets_url() . 'js/wpc-block-location.js', [ 'jquery', 'wpc-pro-widgets-modal-script', 'jquery-timepicker', 'wp-blocks', 'wp-components', 'wp-element', 'wp-i18n' ], \Wpcafe::version());
	}

}
add_action('init', 'register_location_block');

// pickup delivery checkout page block callback
function wpc_location_callback() {
    //check if woocommerce exists
    if ( ! class_exists( 'Woocommerce' ) ) { return; }

    return do_shortcode( '[wpc_location_checkout]' );
}
