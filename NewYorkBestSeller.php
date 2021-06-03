<?php
/*
Plugin Name: New York Best Seller
Plugin URI: 
Description: Plugin brings in the books API from the New York Times
Version: 1.0
Author: Luciano Nicacio
Author URI: https://lucianonicacio.com/
License: GPL2
License URI: https://www.gnu.org/licences/gpl-2.0.html
Text Domain: new-york-best-seller
*/

if(! defined('ABSPATH')) exit;
$app_id = 'c975a419-cc22-45af-901a-e9b480b05ed7';
$key = 'J8T7CNBhAcbSBsEpBCnT3LqcOTGowmqB';
$secret = '7hXuYFQXG3GVnB9G';

add_action('admin_menu', 'ny_add_menu_page');

function ny_add_menu_page() {
    add_menu_page(
        'NY Best sellers',
        'NY Best sellers',
        'manage_options',
        'new-york-best-seller',
        'get_books_api',
        'dashicons-book',
        16,
    );
}

function get_books_api() {
    echo 'hello';
}