<?php
/***
 * Plugin Name: RB PHP Info
 * Description: Plugin to define rb_phpinfo short code to display phpinfo() anywhere on the webpage
 * Version: 1.0
 * Author: Robert Bethge
 */

add_shortcode("rb_php_info", "rb_php_info");
function rb_php_info() {
    ob_start();
    php_info();    
    return ob_get_clean();
}
