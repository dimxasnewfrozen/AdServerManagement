<?php 

// define our app name, app folder, base url and views path.
// constants are defined in index.php off of the root dir
// Base URL including trailing slash (e.g. http://localhost/)
$config['app_name']    = APP_NAME;
$config['app_folder']  = 'AdServerManagement';
$config['base_url']    = '/AdServerManagement/admin';
$config['view_path']   = APP_DIR . '/views';
$config['salt'] 	   = "MLaK4F2G";

$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$config['assets_path'] 	= $protocol . $_SERVER['SERVER_NAME']  . $config['base_url'] . "/assets/";

/*******************************************/

// define our asset directories
$config['css_url']	   = $config['base_url']  . '/assets/css';
$config['js_url'] 	   = $config['base_url']  . '/assets/js';
$config['img_url'] 	   = $config['base_url']  . '/assets/img';
$config['min_url'] 	   = $config['base_url']  . '/assets/min';

//$config['upload_path'] 	= $_SERVER['DOCUMENT_ROOT']  . '/assets/uploads';
$config['upload_path'] 	= $_SERVER['DOCUMENT_ROOT']  . "/" . $config['app_folder'] . "/ads";
$config['upload_url'] 	= $protocol . $_SERVER['SERVER_NAME']  . "/" . $config['app_folder'] . "/ads";


/* DATABASE CONNECTION INFO */
$config['db_host'] 		= 'localhost'; // Database host (e.g. localhost)
$config['db_name'] 		= 'ads'; // Database name
$config['db_username']  = 'root'; // Database username
$config['db_password']  = ''; // Database password
/**********************************************************************/


// Default controller to load
// application/controllers/downloads.php
$config['default_controller'] = 'signup';

// Controller used for errors (e.g. 404)
$config['error_controller']   = 'error';


$config['controller_titles'] = array("dashboard" => "Advertising Dashboard", 
								"ad" => "Current Ads", 
								"groups" => "Ad Groups", 
								"clients" => "Ad Clients", 
								"revenue" => "Ad Revenue", 
								"settings" => "System Settings" );




?>