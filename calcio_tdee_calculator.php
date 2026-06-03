<?php
/*
Plugin Name: TDEE Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/tdee-calculator/
Description: Use our accurate TDEE Calculator to determine your Total Daily Energy Expenditure. Discover how many calories you burn daily to reach your weight goals faster.
Version: 1.0.0
Author: www.calculator.io / TDEE Calculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_tdee_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for TDEE Calculator by www.calculator.io";

function calcio_tdee_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">TDEE Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_tdee_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_tdee_calculator', 'calcio_tdee_calculator_shortcode' );