<?php
/*
Plugin Name: CSS: Greyscaper
Plugin URI: http://pixline.net/wordpress-plugins/css-greyscaper-wp-admin-color-scheme/en/
Description: <em>Greyscaper</em> admin CSS for WordPress 2.5+. Originally based on '<a href="http://kuler.adobe.com" title="search 'Grayscale Paper' on Kuler!">Greyscale Paper</a>' color palette by <em>victorfacius</em>, search for it on <a href="http://kuler.adobe.com" title="search 'Grayscale Paper' here!">Adobe Kuler</a>!.
Author: Paolo Tresso (aka Pixline)
Version: 0.2
Author URI: http://pixline.net/
*/
 
add_action('admin_init','pixline_css_greyscaper');
add_action('admin_init','pixline_css_greyscaper_02');
add_action('admin_init','pixline_css_greyscaper_03');
 
function pixline_css_greyscaper() {
$plugin_url = get_option( 'siteurl' ).'/wp-content/plugins/'.plugin_basename(dirname(__FILE__)).'/gs01.css';
    wp_admin_css_color('gs01',__('Greyscaper'),$plugin_url, array('#262523', '#BFBA9F', '#595643', '#D9D7C5') );
}

function pixline_css_greyscaper_02() {
$plugin_url = get_option( 'siteurl' ).'/wp-content/plugins/'.plugin_basename(dirname(__FILE__)).'/gs01.css';
    wp_admin_css_color('gs02',__('Greyscaper 02'),$plugin_url, array('#262523', '#BFBA9F', '#595643', '#D9D7C5') );
}

function pixline_css_greyscaper_03() {
$plugin_url = get_option( 'siteurl' ).'/wp-content/plugins/'.plugin_basename(dirname(__FILE__)).'/gs03_escape.css';
    wp_admin_css_color('gs03',__('Escape'),$plugin_url, array('#1c1b20', '#fdca00', '#d8d5d7', '#fcfbff') );
}

?>