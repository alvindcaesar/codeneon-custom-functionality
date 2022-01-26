<?php

/**
 * @package     CCFP
 * @link      	https://github.com/alvindcaesar/
 * @copyright   Copyright (c) 2022, Alvind Caesar
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0.0
 * @author      Alvind Caesar <hello@alvindcaesar.com>
 * 
 * @wordpress-plugin
 * Plugin Name:   Codeneon Custom Functionality
 * Plugin URI:    https://github.com/alvindcaesar/codeneon-custom-functionality
 * Author:        Alvind Caesar
 * Author URI:    https://alvindcaesar.com
 * Description:   A collection of useful custom snippets for WordPress
 * Version:       1.0.0
 * License:       GPL-2.0+
 * License URL:   http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain:   prefix-codeneon-custom-functionality
*/

if ( ! defined('ABSPATH')) { die;}

if( !class_exists( 'CCFP' ) ) {
	class CCFP {

		/**
		 * Instance of the class
		 *
		 * @since 1.0.0
		 * @var Instance of CCFP class
		 */
		private static $instance;

		/**
		 * Instance of the plugin
		 *
		 * @since 1.0.0
		 * @static
		 * @staticvar array $instance
		 * @return Instance
		 */
		public static function instance() {
			if ( !isset( self::$instance ) && ! ( self::$instance instanceof CCFP ) ) {
				self::$instance = new CCFP;
				self::$instance->define_constants();
				add_action( 'plugins_loaded', array( self::$instance, 'load_textdomain' ) );
				self::$instance->includes();
				self::$instance->init = new CCFP_Init();
			}
		return self::$instance;
		}

		/**
		 * Define the plugin constants
		 *
		 * @since  1.0.0
		 * @access private
		 * @return void
		 */
		private function define_constants() {
			// Plugin Version
			if ( ! defined( 'CCFP_VERSION' ) ) {
				define( 'CCFP_VERSION', '1.0.0' );
			}
			// Prefix
			if ( ! defined( 'CCFP_PREFIX' ) ) {
				define( 'CCFP_PREFIX', 'ccfp_' );
			}
			// Textdomain
			if ( ! defined( 'CCFP_TEXTDOMAIN' ) ) {
				define( 'CCFP_TEXTDOMAIN', 'ccfp_' );
			}
			// Plugin Options
			if ( ! defined( 'CCFP_OPTIONS' ) ) {
				define( 'CCFP_OPTIONS', 'ccfp-options' );
			}
			// Plugin Directory
			if ( ! defined( 'CCFP_PLUGIN_DIR' ) ) {
				define( 'CCFP_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
			}
			// Plugin URL
			if ( ! defined( 'CCFP_PLUGIN_URL' ) ) {
				define( 'CCFP_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
			}
			// Plugin Root File
			if ( ! defined( 'CCFP_PLUGIN_FILE' ) ) {
				define( 'CCFP_PLUGIN_FILE', __FILE__ );
			}
		}

		/**
		 * Load the required files
		 *
		 * @since  1.0.0
		 * @access private
		 * @return void
		 */
		private function includes() {
			// Require all function classes here
			require_once CCFP_PLUGIN_DIR . 'inc/class-ccfp-init.php';
      require_once CCFP_PLUGIN_DIR . 'inc/class-ccfp-register-post-types.php';
			require_once CCFP_PLUGIN_DIR . 'inc/class-ccfp-disable-auto-updates.php';
		}

    /**
		 * Load the plugin text domain for translation.
		 *
		 * @since  1.0.0
		 * @access public
		 */
		public function load_textdomain() {
			$ccfp_lang_dir = dirname( plugin_basename( CCFP_PLUGIN_FILE ) ) . '/languages/';
			$ccfp_lang_dir = apply_filters( 'CCFP_lang_dir', $ccfp_lang_dir );

			$locale = apply_filters( 'plugin_locale',  get_locale(), CCFP_TEXTDOMAIN );
			$mofile = sprintf( '%1$s-%2$s.mo', CCFP_TEXTDOMAIN, $locale );

			$mofile_local  = $ccfp_lang_dir . $mofile;
			$mofile_global = WP_LANG_DIR . '/edd/' . $mofile;

			if ( file_exists( $mofile_local ) ) {
				load_textdomain( CCFP_TEXTDOMAIN, $mofile_local );
			} else {
				load_plugin_textdomain( CCFP_TEXTDOMAIN, false, $ccfp_lang_dir );
			}
		}
	}
}

/**
 * Return the instance
 *
 * @since 1.0.0
 * @return object The Safety Links instance
 */
function CCFP_Run() {
	return CCFP::instance();
}
CCFP_Run();


