<?php

/*

Plugin Name: My first plugin

Plugin URI: https://mywebsite.com

Description: Plugin to display hello world

Version: 1.0

Author: Tim

Author URI: https://mywebsite.com

License: GPLv2 or later

*/

//add a shortcode that prints hello world

function hello_world_shortcode() {
  return '<h5 style="color: red">Hello World</h5>';
}

add_shortcode('helloworldshortcode','hello_world_shortcode');

// add javascript to the plugin
function my_plugin_scripts(){
  wp_enqueue_script('jquery-myplugin-script', plugin_dir_url(__FILE__) . 'js/jquery-3.6.0.min.js');
  wp_enqueue_script('custom-myplugin-script', plugin_dir_url(__FILE__) . 'js/custom.js');
}

add_action('wp_enqueue_scripts','my_plugin_scripts');

// add in a css file
wp_enqueue_style('custom-plugin-css', plugin_dir_url(__FILE__) . 'css/custom-style.css');

 ?>
