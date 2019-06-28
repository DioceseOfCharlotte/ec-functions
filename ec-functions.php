<?php
/**
 * Plugin Name: EC Functions
 * Plugin URI:  https://github.com/DioceseOfCharlotte/ec-functions
 * Description: CSS debugger
 * Version:     1.0.0
 * Author:      Billy Griffith
 * Author URI:  https://github.com/DioceseOfCharlotte
 * Text Domain: doc-ec
 * GitHub Plugin URI: https://github.com/DioceseOfCharlotte/ec-functions
 * Domain Path: /languages
 * License:     GPL2
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once( plugin_dir_path( __FILE__ ) . 'includes/speakers-cpt.php' );
require_once( plugin_dir_path( __FILE__ ) . 'includes/shortcodes.php' );
