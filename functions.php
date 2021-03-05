<?php
/**
 * sklunetWC functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sklunetWC
 */

//Подключаю настройки темы
require get_template_directory() . '/inc/enqueue-script-style.php';
require get_template_directory() . '/inc/theme-settings.php';
require get_template_directory() . '/inc/widget-areas.php';
require get_template_directory() . '/inc/Main_Header_Menu.php';
require get_template_directory() . '/inc/Main_Footer_Menu.php';
require get_template_directory() . '/inc/Category_Footer_Menu.php';
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
	require get_template_directory() . '/woocommerce/inc/wc-functions.php';
	require get_template_directory() . '/woocommerce/inc/wc-functions-remove.php';
	require get_template_directory() . '/woocommerce/inc/parts/wc-functions-cart.php';
	require get_template_directory() . '/woocommerce/inc/wc-functions-archive-product.php';
	require get_template_directory() . '/woocommerce/inc/parts/wc-functions-content-product.php';
	require get_template_directory() . '/woocommerce/inc/wc-functions-content-single-product.php';
	require get_template_directory() . '/woocommerce/inc/wc-functions-navigation.php';
}
