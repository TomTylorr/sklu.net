<?php

defined('ABSPATH') || exit;

/**
 * Enqueue scripts and styles.
 */
add_action('wp_enqueue_scripts', 'sklunetWC_style');
function sklunetWC_style()
{
    wp_enqueue_style('sklunetWC-style', get_stylesheet_uri(), array(),time());
    wp_enqueue_style('sklunetWC-owl-carousel', get_template_directory_uri() . '/assets/css/libs/owl.carousel.min.css', array());
    wp_enqueue_style('sklunetWC-owl-theme', get_template_directory_uri() . '/assets/css/libs/owl.theme.default.min.css', array());
//    wp_enqueue_style('sklunetWC-constructor-style', get_template_directory_uri(). '/programma/style.css', array(), _S_VERSION);
    wp_style_add_data('sklunetWc-style', 'rtl', 'replace');


//    if ( is_page('39') ) {
//        wp_enqueue_style( 'sklunetwc-constructor-bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
//    }

}

add_action('wp_enqueue_scripts', 'sklunetWC_scripts');
function sklunetWC_scripts()
{

    wp_deregister_script('jquery');
    wp_register_script('jquery', (get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js'), false, null, true);
    wp_enqueue_script('jquery');

    wp_enqueue_script( 'sklunetwc-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'sklunetwc-main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );
    wp_enqueue_script('sklunetwc-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), _S_VERSION, true);
    wp_enqueue_script('sklunetwc-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), _S_VERSION, true);

    wp_enqueue_script('sklunetwc-owl-carousel', get_template_directory_uri() . '/assets/js/libs/owl.carousel.min.js', array('jquery'), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

}

/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
function sklunetwc_woocommerce_scripts() {
    wp_enqueue_style( 'sklunetwc-woocommerce-style', get_template_directory_uri() . '/woocommerce.css', array(), _S_VERSION );

    $font_path   = WC()->plugin_url() . '/assets/fonts/';
    $inline_font = '@font-face {
			font-family: "star";
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
				url("' . $font_path . 'star.woff") format("woff"),
				url("' . $font_path . 'star.ttf") format("truetype"),
				url("' . $font_path . 'star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}';

    wp_add_inline_style( 'sklunetwc-woocommerce-style', $inline_font );
}
add_action( 'wp_enqueue_scripts', 'sklunetwc_woocommerce_scripts' );
