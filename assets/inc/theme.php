<?php

/***************************************************************
* Function pp_theme_styles_scripts
* Register and enqueue all frontend CSS/JS
***************************************************************/

add_action('wp_enqueue_scripts', 'pp_theme_styles_scripts');

function pp_theme_styles_scripts() {
	
	// register custom js
	wp_register_script('gmap', 'http://maps.google.com/maps/api/js?sensor=true', '', null);
	wp_enqueue_script('gmap');
	wp_register_script('map', PP_JS_URL . '/map.js', array('jquery', 'gmap'), filemtime(PP_PATH . '/assets/js/map.js'));
	wp_enqueue_script('map');

    if ($social = apply_filters('pp_social', false)) {
		wp_register_script('sharrre', PP_JS_URL . '/sharrre.js', array('jquery', 'gmap'), filemtime(PP_PATH . '/assets/js/sharrre.js'));
		wp_enqueue_script('sharrre');
	}
	
	// register custom css
	wp_register_style('pp-screen', PP_CSS_URL . '/pp.css', array(), filemtime(PP_PATH . '/assets/css/pp.css'), 'screen');
	wp_enqueue_style('pp-screen');
	
}

/***************************************************************
* Function pp_template_redirect
* Disable single view for this post type - might enable at later date
***************************************************************/

add_action( 'template_redirect', 'pp_template_redirect' );

function pp_template_redirect() {
    global $wp, $wp_query;

    if ( isset( $wp->query_vars['post_type'] ) && $wp->query_vars['post_type'] == 'pp' && is_single()) {
  		wp_die(__('Disabled','pp'));
    }
}

/***************************************************************
* Function pp_iframe_redirect
* Load the iframe code when ?pp_iframe=true is added as a query string
***************************************************************/

add_action( 'template_redirect', 'pp_iframe_redirect' );

function pp_iframe_redirect() {
    global $wp, $wp_query;

 	if (isset($_GET['pp_iframe'])) {
		
		if ($_GET['pp_iframe'] == 'true') {
			include_once(PP_PATH . '/iframe.php');
			exit();
		}
	}
}
?>