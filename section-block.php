<?php
/**
 * Plugin Name: Section Block
 * Plugin URI: http://wedoplugins.com/plugins/section-block/
 * Description: This plugin brings a Section Block to new WordPress Blocks editor.
 * Author: We Do Plugins
 * Author URI: http://wedoplugins.com/
 * Version: 1.3.4
 * License: GPLv3
 * Text Domain: section-block
 *
 * @package section-block
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'WDPSB_MAIN_FILE', __FILE__ );
define( 'WDPSB_VERSION', '1.3.4' );

/**
 * Require plugin classes
 */
require_once dirname( WDPSB_MAIN_FILE ) . '/classes/class-wdpsb-config.php';
require_once dirname( WDPSB_MAIN_FILE ) . '/classes/class-wdpsb-enqueue.php';
require_once dirname( WDPSB_MAIN_FILE ) . '/classes/class-wdpsb-blockssummarypage.php';
