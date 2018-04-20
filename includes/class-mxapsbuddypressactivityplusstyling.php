<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

final class MxActivityPlusStyling
{

	/*
	* MxActivityPlusStyling constructor
	*/
	public function __construct()
	{

		$this->define_constants();
		$this->include();

	}

	/*
	* Define MXAPS constants
	*/
	public function define_constants()
	{

		$this->define( 'MXAPS_TABLE_SLUG', 'mxaps_buddypress_activity_pluss_tyling' );

		// include php files
		$this->define( 'MXAPS_PLUGIN_ABS_PATH', dirname( MXAPS_PLUGIN_PATH ) . '/' );

		// version
		$this->define( 'MXAPS_PLUGIN_VERSION', time() ); // Must be replaced before production on for example 1.0


	}

	/*
	* Incude required core files
	*/
	public function include()
	{

		// Basis functions
		require_once MXAPS_PLUGIN_ABS_PATH . 'includes/class-basis-plugin-class.php';

		// Part of the Frontend
		require_once MXAPS_PLUGIN_ABS_PATH . 'includes/frontend/class-frontend-main.php';


		// Part of the Administrator


	}

	// Define function
	private function define( $mame, $value )
	{

		if( ! defined( $mame ) )
		{

			define( $mame, $value );

		}

	}


}