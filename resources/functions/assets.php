<?php

add_action( 'wp_enqueue_scripts', function () {
	//wp_enqueue_media();
	wp_enqueue_style( 'composer-style', get_template_directory_uri() . '/dist/css/js_composer.min.css', [], WP_TOOLKIT_VER );
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/dist/css/main-style.css', [], WP_TOOLKIT_VER );
	wp_enqueue_style( 'app-style2', get_template_directory_uri() . '/dist/css/main-style2.css', [], WP_TOOLKIT_VER );
	wp_enqueue_style( 'main-responsive', get_template_directory_uri() . '/dist/css/main-responsive.css', [], WP_TOOLKIT_VER );
	wp_enqueue_style( 'main-responsive2', get_template_directory_uri() . '/dist/css/main-responsive2.css', [], WP_TOOLKIT_VER );
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/dist/css/owl.carousel.min.css', [], WP_TOOLKIT_VER );
	wp_enqueue_style( 'lightslider', get_template_directory_uri() . '/dist/css/lightslider.css', [], WP_TOOLKIT_VER );
	wp_enqueue_style( 'app-styles', get_template_directory_uri() . '/dist/css/app.css', [], WP_TOOLKIT_VER );

	wp_enqueue_script( 'js_composer_front', get_template_directory_uri() . '/dist/js/js_composer_front.min.js', ['jquery'], WP_TOOLKIT_VER, true );
	wp_enqueue_script( 'vc-waypoints', get_template_directory_uri() . '/dist/js/vc-waypoints.min.js', ['jquery'], WP_TOOLKIT_VER, true );
	wp_enqueue_script( 'lightslider', get_template_directory_uri() . '/dist/js/lightslider.js', ['jquery'], WP_TOOLKIT_VER, true );
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/dist/js/owl.carousel.js', ['jquery'], WP_TOOLKIT_VER, true );
	wp_enqueue_script( 'primary-navigation', get_template_directory_uri() . '/dist/js/primary-navigation.js', ['jquery'], WP_TOOLKIT_VER, true );
	wp_enqueue_script( 'gsap-scripts', get_template_directory_uri() . '/dist/js/gsap.min.js', ['jquery'], WP_TOOLKIT_VER, true );
	wp_enqueue_script( 'ScrollTrigger', get_template_directory_uri() . '/dist/js/ScrollTrigger.min.js', ['jquery'], WP_TOOLKIT_VER, true );
	wp_enqueue_script( 'manifest-scripts', get_template_directory_uri() . '/dist/js/manifest.js', ['jquery'], WP_TOOLKIT_VER, true );
	wp_enqueue_script( 'vendor-scripts', get_template_directory_uri() . '/dist/js/vendor.js', ['jquery'], WP_TOOLKIT_VER, true );
	wp_enqueue_script( 'app-scripts', get_template_directory_uri() . '/dist/js/app.js', ['jquery'], WP_TOOLKIT_VER, true );

	wp_localize_script( 'app-scripts', 'php_data', [
		'admin_logged' => in_array( 'administrator', wp_get_current_user()->roles ) ? 'yes' : 'no',
		'ajax_url'     => admin_url( 'admin-ajax.php' ),
		'tpd_uri'      => get_template_directory_uri(),
		'site_url'     => site_url(),
		'rest_url'     => get_rest_url(),
	] );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
} );


