<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}

/**
 * Filter add API Key to custom field Google Maps
 */

function my_acf_google_map_api( $api ){
	
	$api['key'] = 'AIzaSyCb4CCv1u6pD8vhEEQQEeH7OFXNVkYleYw';
	
	return $api;
	
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


function cptui_register_my_cpts() {

	/**
	 * Post Type: Produkter.
	 */

	$labels = array(
		"name" => __( "Produkter", "understrap" ),
		"singular_name" => __( "Produkt", "understrap" ),
		"featured_image" => __( "Produkt bild", "understrap" ),
		"archives" => __( "Product archives", "understrap" ),
	);

	$args = array(
		"label" => __( "Produkter", "understrap" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "products", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "thumbnail", "author" ),
		"taxonomies" => array( "products_cat" ),
	);

	register_post_type( "products", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Produkter Kategori.
	 */

	$labels = array(
		"name" => __( "Produkter Kategori", "understrap" ),
		"singular_name" => __( "Produkter Kategori", "understrap" ),
	);

	$args = array(
		"label" => __( "Produkter Kategori", "understrap" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'products_cat', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "products_cat",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		);
	register_taxonomy( "products_cat", array( "products" ), $args );
}
add_action( 'init', 'cptui_register_my_taxes' );

