<?php

function dvkss_get_options()
{	
	static $options;

	if(!$options) {
		// default options
		$defaults = array(
			'load_icon_css' => 1,
			'load_popup_js' => 1,
			'icon_size' => 32,
			'twitter_username' => '',
			'auto_add' => 1,
			'before_text' => "Share this post: "		
		);

		// get options from db
		$db_option = get_option('dvk_social_sharing', array());

		// add option to database if not set, saves a query
		if(!$db_option) {
			update_option('dvk_social_sharing', $defaults);
		}

		// merge with default options to prevent notices
		$options = wp_parse_args($db_option, $defaults);
	}

	return $options;
}

function dvkss_load_textdomain() {
	load_plugin_textdomain( 'dvk-social-sharing', false, 'dvk-social-sharing/languages/' );
}

add_action('plugins_loaded', 'dvkss_load_textdomain');