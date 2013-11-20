<?php

class DVKSS_Public {
	
	public function __construct() {
		add_action( 'wp_enqueue_scripts', array($this, 'load_assets'), 99);

		add_filter('the_content', array($this, 'add_links') );

		add_shortcode('dvk_social_sharing', 'dvk_social_sharing');
	}

	public function load_assets() 
	{
		$opts = dvkss_get_options();

		if($opts['load_icon_css']) {
			wp_enqueue_style('dvk-social-sharing', DVKSS_PLUGIN_URL . 'assets/css/styles-'. $opts['icon_size'] .'.css', array(), DVKSS_VERSION);
		}

		if($opts['load_popup_js']) {
			wp_enqueue_script( 'dvk-social-sharing', DVKSS_PLUGIN_URL . 'assets/js/script.js', array(), DVKSS_VERSION, true );
		}
	}

	public function add_links($content) 
	{
		$opts = dvkss_get_options();
		if(!$opts['auto_add']) { return $content; }

		// by default, the buttons will only show on single posts
		$show_buttons = apply_filters('dvkss_display', (is_single() && get_post_type() == 'post'));

		if(!$show_buttons) { return $content; }

		// add buttons to content
		return $content . dvk_social_sharing();
	}
}