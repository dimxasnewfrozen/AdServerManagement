<?php

// Defines
define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
define('APP_DIR', ROOT_DIR .'application/');
define('PRODUCT_URL', '/download_files/');
define('APP_NAME', 'MBF Activation Center');


// Includes
require(APP_DIR .'config/config.php');
require(ROOT_DIR .'system/model.php');
require(ROOT_DIR .'system/view.php');
require(ROOT_DIR .'system/controller.php');
require(ROOT_DIR .'system/pip.php');

// Define base URL
global $config;

define('BASE_URL', $config['base_url']);
define('CSS_URL', $config['css_url']);
define('JS_URL', $config['js_url']);
define('IMG_URL', $config['img_url']);
define('VIEWS_PATH', $config['view_path']);


?>
