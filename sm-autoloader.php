<?php

/**
 * Plugin Name:       SM - Autoload
 * Plugin URI:        https://github.com/msulaimanmisri
 * Description:       lorem ipsum dolor untuk test je woi
 * Version:           1.0.0
 * Author:            Muhamad Sulaiman Misri
 * Author URI:        https://sulaimanmisri.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sm-autoload
 * Domain Path:       /languages
 */

if (!defined('ABSPATH')) {
    die('Sorry, but you can not directly access this file.');
}

require plugin_dir_path(__FILE__) . 'vendor/autoload.php';
// require "Src/Controller/UserController.php";
