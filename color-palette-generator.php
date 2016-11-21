<?php
/*
Plugin Name: Color Palette Generator
Plugin URI: https://github.com/houke/color-palette-generator
Description: Generates color palettes for your media uploads (jpg, png, gif), shows them on your website and allows you to show images per color
Version: 0.1
Author: Houke de Kwant
Author URI: http://nl.linkedin.com/in/houkedekwant
Text Domain: cpg
Domain Path: /languages
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: cpg
Domain Path: /languages
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

//Constants
$prefix  = 'CPG_';
$version = '0.1';

//Define variables
$cpg_constants = array(
	'VERSION'           => $version,
	'NAME'				=> 'color-palette-generator',
	'BASENAME'          => plugin_basename( __FILE__ ),
	'DIR'               => plugin_dir_path( __FILE__ ),
	'URL'               => plugin_dir_url( __FILE__ ),
);

foreach ( $cpg_constants as $const_name => $constant_val ) {
	if ( ! defined( $prefix . $const_name ) ) {
		define( $prefix . $const_name, $constant_val );
	}
}

//Load Translations
load_plugin_textdomain('cpg', false, CPG_NAME . '/languages/');

//Import supporting libraries
require_once CPG_DIR . 'libs/PKRoundColor.php';
require_once CPG_DIR . 'inc/cpg-admin-shared-functions.php';
require_once CPG_DIR . 'inc/cpg-settings.php';
require_once CPG_DIR . 'inc/cpg-admin-layout.php';
require_once CPG_DIR . 'inc/cpg-ajax.php';
require_once CPG_DIR . 'inc/cpg-admin-widget.php';
require_once CPG_DIR . 'inc/cpg-admin-search-rewrites.php';
require_once CPG_DIR . 'inc/cpg-frontend-show-palette-on-attachment.php';
