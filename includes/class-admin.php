<?php

if( ! defined("DVKSS_VERSION") ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit;
}

class DVKSS_Admin {

	/**
	* @var int
	*/ 
	private $code_version = 1;
	
	/**
	* Constructor
	*/ 
	public function __construct() {

		if( $this->code_version > get_option( 'dvkss_code_version', 0) ) {
			$this->upgrade();
		}

		add_action( 'admin_init', array( $this, 'register_settings' ) );
		add_action( 'admin_menu', array( $this, 'add_menu_item' ) );

		add_filter( "plugin_action_links_dvk-social-sharing/index.php", array( $this, 'add_settings_link' ) );

		if ( isset( $_GET['page'] ) && $_GET['page'] === 'dvkss' ) {
			// load css
			add_action( 'admin_enqueue_scripts', array( $this, 'load_css' ) );
		}
	}

	public function upgrade() {

		$opts = dvkss_get_options();

		if( isset( $opts['auto_add'] ) ) {

			if( $opts['auto_add'] ) {
				$opts['auto_add_post_types'][] = 'post';
				unset( $opts['auto_add'] );
			}

		}

		update_option( 'dvk_social_sharing', $opts );
		update_option( 'dvkss_code_version', $this->code_version );
	}

	/**
	* Load admin scripts and stylesheets
	*/
	public function load_css() {
		wp_enqueue_style( 'dvk-social-sharing', DVKSS_PLUGIN_URL . 'assets/css/admin-styles.css'  );
		wp_enqueue_script( 'dvk-social-sharing', DVKSS_PLUGIN_URL . 'assets/js/admin-script.js', array( 'jquery' ), DVKSS_VERSION , true );
	}

	/**
	* Register the plugin settings
	*/
	public function register_settings() {
		register_setting( 'dvk_social_sharing', 'dvk_social_sharing', array($this, 'sanitize_settings') );
	}

	/**
	* Sanitize settings
	*	
	* @param array $settings
	* @return array $settings
	*/
	public function sanitize_settings( $settings ) {

		$settings['before_text'] = strip_tags( $settings['before_text'], '<a><br><strong><i><em><b><span>' );
		$settings['icon_size'] = trim( absint( $settings['icon_size'] ) );
		$settings['twitter_username'] = trim( strip_tags( $settings['twitter_username'] ) );

		return $settings;
	}

	/**
	* Add settings link to Plugin overview
	*
	* @return array $links
	*/
	public function add_settings_link( $links ) {
		$settings_link = '<a href="options-general.php?page=dvkss">'. __('Settings') . '</a>';
		array_unshift( $links, $settings_link );

		return $links;
	}

	/**
	* Add options page to Admin menu
	*/
	public function add_menu_item() {
		add_options_page( 'Social Sharing By Danny', 'Social Sharing', 'manage_options', 'dvkss', array( $this, 'show_settings_page' ) );
	}

	/**
	* Show the plugin settings page
	*/
	public function show_settings_page() {
		$opts = dvkss_get_options();

		$post_types = get_post_types( array( 'public' => true ), 'objects' );

		include DVKSS_PLUGIN_DIR . 'includes/views/settings-page.php';
	}



}