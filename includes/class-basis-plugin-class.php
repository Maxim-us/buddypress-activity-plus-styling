<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;


class MXAPSBasisPluginClass
{

	private $table_slug = MXAPS_TABLE_SLUG;

	public static function activate()
	{

	}

	public static function deactivate()
	{

	}

	public static function uninstall()
	{

		if ( __FILE__ != WP_UNINSTALL_PLUGIN ) {

			return;
			
		}
		
	}


}