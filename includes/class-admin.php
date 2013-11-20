<?php

class DVKSS_Admin {
	
	public function __construct() {

		add_action( 'admin_init', array( $this, 'register_settings' ) );
		add_action( 'admin_menu', array( $this, 'add_menu_item' ) );

		add_filter( "plugin_action_links_dvk-social-sharing/dvk-social-sharing.php", array( $this, 'add_settings_link' ) );

		if ( isset( $_GET['page'] ) && $_GET['page'] == 'dvkss' ) {
			// load css
			add_action( 'admin_enqueue_scripts', array( $this, 'load_css' ) );
		}
	}

	public function load_css() {
		wp_enqueue_style( 'dvk-social-sharing', DVKSS_PLUGIN_URL . 'assets/css/admin-styles.css'  );
		wp_enqueue_script( 'dvk-social-sharing', DVKSS_PLUGIN_URL . 'assets/js/admin-script.js', array( 'jquery' ), DVKSS_VERSION , true );
	}

	public function register_settings() {
		register_setting( 'dvk_social_sharing', 'dvk_social_sharing', array($this, 'sanitize_settings') );
	}

	public function sanitize_settings($settings) {

		$settings['icon_size'] = trim( absint ( $settings['icon_size'] ) );
		$settings['twitter_username'] = trim( strip_tags( $settings['twitter_username'] ) );

		return $settings;
	}

	public function add_settings_link( $links ) {
		$settings_link = '<a href="options-general.php?page=rfbp">'. __('Settings', 'recent-facebook-posts') . '</a>';
		array_unshift( $links, $settings_link );

		return $links;
	}

	public function add_menu_item() {
		add_options_page( 'Social Sharing By Danny', 'Social Sharing', 'manage_options', 'dvkss', array( $this, 'show_settings_page' ) );
	}

	public function show_settings_page() {
		$opts = dvkss_get_options();
		include DVKSS_PLUGIN_DIR . 'includes/views/settings-page.php';
	}



}