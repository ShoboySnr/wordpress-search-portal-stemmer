<?php

/*
Plugin Name: Porter Stemmer Integration on WordPress
Plugin URI: https://kasianetwork.com/
Description: Improving WordPress Default Search, WooCommerce Product Query and Products Filter Professional for WooCommerce (WOOF) Query using the Porter Stemmer Algorithm
Version: 1.0.0
Requires PHP: 7.0
Requires at least: 5.0
Author: Damilare Shobowale
Author URI: https://techwithdee.com/
License: GPL2
Text Domain: wordpress-search-porter-stemmer
*/

require "porter-stemmer.php";

// Modify Default WordPress Search Query
function custom_search_stemming($query) {
	if ($query->is_search && !is_admin()) {
		$search_terms = $query->query_vars['s'];
		$stemmed_terms = Porter2::stem($search_terms);
		$query->set('s', $stemmed_terms);
	}
	return $query;
}
add_filter('pre_get_posts', 'custom_search_stemming');

// Modify WooCommerce Product Query
function modify_woocommerce_product_query($query) {
	if (is_search() && !is_admin() && isset($_GET['s'])) {
		$search_terms = $query->get('s');
		$stemmed_terms = Porter2::stem($search_terms);
		$query->set('s', $stemmed_terms);
	}
}
add_action('woocommerce_product_query', 'modify_woocommerce_product_query');

// Modify WOOF products shortcode query
function modify_woof_products_shortcode_query($args) {
	if (isset($args['woof_text_filter'])) {
		$search_terms = $args['woof_text_filter'];
		$stemmed_terms = Porter2::stem($search_terms);
		$args['woof_text_filter'] = $stemmed_terms;
	}
	return $args;
}
add_filter('woof_products_query', 'modify_woof_products_shortcode_query');