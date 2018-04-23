<?php
/*
Plugin Name: Buddypress Activity Plus Styling
Plugin URI: https://github.com/Maxim-us/buddypress-activity-plus-styling
Description: Add to the Buddypress Activity Plus plugin. This plugin adds CSS styles to images, videos and links. Also styling a THICKBOX.
Author: Marko Maksym
Version: 1.0
Author URI: https://github.com/Maxim-us
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/*
* Define MXAPS_PLUGIN_PATH
*/
if ( ! defined( 'MXAPS_PLUGIN_PATH' ) ) {

	define( 'MXAPS_PLUGIN_PATH', __FILE__ );

}

/*
* Define MXAPS_PLUGIN_URL
*/
if ( ! defined( 'MXAPS_PLUGIN_URL' ) ) {

	// Return http://my-domain.com/wp-content/plugins/buddypress-activity-plus-styling/
	define( 'MXAPS_PLUGIN_URL', plugins_url( '/', __FILE__ ) );

}

/*
* Define MXAPS__FILE__
*/
if ( ! defined( 'MXAPS__FILE__' ) ) {

	define( 'MXAPS__FILE__', __FILE__ );

}

/*
* Include the main MxActivityPlusStyling class
*/
if ( ! class_exists( 'MxActivityPlusStyling' ) ) {

	require_once plugin_dir_path( __FILE__ ) . '/includes/class-mxapsbuddypressactivityplusstyling.php';

	// Create new instance
	new MxActivityPlusStyling();

	/*
	* Registration hooks
	*/
	// Activation
	register_activation_hook( __FILE__, array( 'MXAPSBasisPluginClass', 'activate' ) );

	// Deactivation
	register_deactivation_hook( __FILE__, array( 'MXAPSBasisPluginClass', 'deactivate' ) );

	// Uninstall
	register_uninstall_hook( __FILE__, array( 'MXAPSBasisPluginClass', 'uninstall' ) );

}