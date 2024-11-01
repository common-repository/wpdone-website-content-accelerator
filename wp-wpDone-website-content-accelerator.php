<?php
/*
Plugin Name: wpDone website content accelerator
Plugin URI: https://www.wpdone.com.au/speed-wordpress-website-content-accelerator/
Description: accelerates your WordPress website
Version: 1.0.27
Author: sfarrell5123
Author URI: https://www.wpdone.com.au/
*/
 global $wp_admin_bar, $wpdb, $show_admin_bar;


if (!function_exists('wwwce_init2')){

	add_action('init','wwwce_init2');

	function wwwce_init2()
	{
		if (
		is_super_admin() &&
		is_admin_bar_showing()
		){

			if (!function_exists('wwwce_custom_toolbar_link')){
			function wwwce_custom_toolbar_link($wp_admin_bar) {

				$args = array(
					'id' => 'wwwce_clearcache',
					'title' => 'Clear CA Cache',
					'href' => '/wp-admin/options-general.php?page=wwwce_settings-page&clearcache=1',
					'meta' => array(
						'class' => 'wwwce_clearcache',
						'title' => 'Clear CA Cache'
						)
				);
				$added = $wp_admin_bar->add_node($args);
			}
			add_action('admin_bar_menu', 'wwwce_custom_toolbar_link', 999);
			}

		}
	}

}


	if (!function_exists('wwwce_clear_cache')){
		function wwwce_clear_cache()
		{
			$wwwca_version = get_option('wwwca_version', 1);
			$wwwca_version += 1;
			update_option('wwwca_version', $wwwca_version, true);
			echo "Cache cleared!";

		}

	}

if ( ! class_exists( 'wp_wpDone_website_content_accelerator' ) ) {
	require_once( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'wp-wpDone-website-content-accelerator-core.php' );
}

