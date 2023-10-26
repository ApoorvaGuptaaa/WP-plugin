<?php
/*
Plugin Name: Weather Plugin
Description: Display weather for the current location or Delhi.
Version: 1.0
Author: Apoorva Gupta
*/

// Enqueue scripts and styles
function enqueue_weather_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('weather-plugin', plugin_dir_url(__FILE__) . 'js/weather-plugin.js', array('jquery'), '1.0', true);

    // Pass the OpenWeatherMap API key to the JavaScript file.
    wp_localize_script('weather-plugin', 'weather_data', array(
        'api_key' => '0dd538713c6d816128cbd0ca4b774f5c'
    ));
}

add_action('wp_enqueue_scripts', 'enqueue_weather_scripts');

// Create a shortcode
function display_weather() {
    return '<div id="weather-container"></div>';
}

add_shortcode('weather', 'display_weather');
