<?php
/**
 * Plugin Name: ACF Country Field
 * Description: Custom ACF field type for ISO countries
 * Version: 1.0.0
 * Author: Vladyslav Malko
 * Author uri: https://vladyslav.pro
 */

if ( ! defined('ABSPATH') ) exit;

add_action('acf/include_field_types', function () {
    require_once __DIR__ . '/fields/class-acf-field-country.php';
});
