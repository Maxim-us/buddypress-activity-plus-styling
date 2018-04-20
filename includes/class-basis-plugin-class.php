<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class MXAPSBasisPluginClass
{

	public static function activate()
	{
		// ...
	}

	public static function deactivate()
	{
		// ...
	}

	public static function uninstall()
	{

		if ( MXAPS__FILE__ != WP_UNINSTALL_PLUGIN ) {

			return;

		}
		
	}

}