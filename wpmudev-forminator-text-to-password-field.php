<?php 
/**
* Plugin Name: [Forminator Pro] - Render a text field as a password field
* Plugin URI: https://premium.wpmudev.org/
* Description: Render a text field as a password one by using "password-field" class (1.11.4)
* Author: Alessandro Kaounas @ WPMUDEV
* Author URI: https://premium.wpmudev.org/
* Task: 0/1135022585412927/1167628854487468
* License: GPLv2 or later
*/

add_filter( 'forminator_field_text_markup', function( $html, $field ){
	if ( isset( $field[ 'custom-class' ] ) && strpos( $field[ 'custom-class' ], 'password-field' ) !== false ) {
		$html = str_replace( 'type="text"', 'type="password"', $html );
	}
	return $html;
}, 20, 2 );