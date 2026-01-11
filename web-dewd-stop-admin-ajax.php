<?php
/**
 * @package Web Dewd Stop Admin Ajax
 * @version 0.0.1
 *
 * Plugin Name: Web Dewd Stop Admin Ajax
 * Plugin URI: https://www.web-dewd.co.uk
 * Description: Stops the Admin Ajax poller for cleaner debugging
 * Author: Paul Darby
 * Version: 0.0.1
 * Author URI: https://www.web-dewd.co.uk
 * 
 */
 
if (!defined('ABSPATH'))
    exit; // Exit if accessed directly

add_action('wp_print_scripts', function () {

        wp_dequeue_script('heartbeat');
        wp_deregister_script('heartbeat');
    
},999);