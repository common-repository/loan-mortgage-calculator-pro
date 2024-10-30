<?php
/**
 * @package Loan & Mortgage Calculator Pro
 */
/*
Plugin Name: Loan & Mortgage Calculator Pro
Description: A simple loan payoff date calculator. Use shortcode [lmcp-calc] to display calulator anywhere.
Version: 1.0.0
Author: Tekki Web Solutions
Author URI: https://www.tekkiwebsolutions.com/
License: GPLv2 or later
Text Domain: procalc
*/

define( 'LMCP_CALC_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
require_once( LMCP_CALC_PLUGIN_DIR . 'class.lmcpcalc.php' );
add_action( 'init', array( 'LMCPCalc', 'lmcp_init' ) );

?>