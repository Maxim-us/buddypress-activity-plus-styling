<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class MXAPSFrontEndMain
{

	// Register function
	public function register()
	{

		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );

	}

		public function enqueue()
		{

			wp_enqueue_style( 'mxaps_font_awesome', MXAPS_PLUGIN_URL . 'assets/font-awesome-4.6.3/css/font-awesome.min.css' );

			wp_enqueue_style( 'mxaps_style', MXAPS_PLUGIN_URL . 'includes/frontend/assets/css/mxaps_style.css', array( 'mxaps_font_awesome' ), MXAPS_PLUGIN_VERSION, 'all' );

			wp_enqueue_script( 'mxaps_script', MXAPS_PLUGIN_URL . 'includes/frontend/assets/js/mxaps_style.js', array( 'jquery' ), MXAPS_PLUGIN_VERSION, false );

		}

}

// Initialize
$initialize_class = new MXAPSFrontEndMain();

// Apply scripts and styles
$initialize_class->register();