<?php
/**
 * DB Holding
 *
 * Plugin Name: DB Holding Page
 * Plugin URI:  https://daisybell.ch/wordpress/plugins
 * Description: Give the ability to add a custom holding page
 * Version:     1.0.0
 * Author:      Sacha Beraud – DaisyBell
 * Author URI:  https://daisybell.ch
 * License:    	Copyright 2019, Sacha Beraud – DaisyBell. All rights reserved.  
 * Text Domain: db-holding
 */

$path_to_acf = ABSPATH . 'wp-content/plugins/advanced-custom-fields-pro/';
include_once( $path_to_acf. 'acf.php');

/*
* Execute redirect
*/
function DB_holding_page() {
	
	if (!is_user_logged_in()) {
		
		if(get_field('holding_page_activate', 'option')) {
	
			require_once('templates/m3restaurants/m3restaurants.php');
			die();
			
		}
	}
}

/*
* Add holding page fields
*/
function add_holding_page_field_acf() {
	
	if( function_exists('acf_add_local_field_group') ):

		acf_add_local_field_group(array(
			'key' => 'group_5d4824c520b01',
			'title' => 'Holding Page Options',
			'fields' => array(
				array(
					'key' => 'field_5d4824f8e8bba',
					'label' => 'Activer la holding page ?',
					'name' => 'holding_page_activate',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => 'Activer',
					'default_value' => 0,
					'ui' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'daisybell-settings',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => true,
			'description' => '',
		));

	endif;
	
}

add_action('init', 'add_holding_page_field_acf', 20); //Fire the function after ACF
add_action('template_redirect', 'DB_holding_page', 15);
