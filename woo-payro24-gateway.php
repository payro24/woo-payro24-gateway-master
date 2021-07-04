<?php
/**
 * Plugin Name: payro24 payment gateway for Woocommerce
 * Author: payro24
 * Description: <a href="https://payro24.ir">payro24</a> secure payment gateway for Woocommerce.
 * Version: 2.1.1
 * Author URI: https://payro24.ir
 * Author Email: info@payro24.ir
 * Text Domain: woo-payro24-gateway
 * Domain Path: /languages/
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Load plugin textdomain.
 *
 * @since 1.0.0
 */
function woo_payro24_gateway_load_textdomain() {
	load_plugin_textdomain( 'woo-payro24-gateway', false, basename( dirname( __FILE__ ) ) . '/languages' );
}

add_action( 'init', 'woo_payro24_gateway_load_textdomain' );

require_once( plugin_dir_path( __FILE__ ) . 'includes/wc-gateway-payro24-helpers.php' );
require_once( plugin_dir_path( __FILE__ ) . 'includes/wc-gateway-payro24-init.php' );
