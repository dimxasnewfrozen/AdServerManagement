<?php
header('Access-Control-Allow-Origin: localhost');
header('Content-Type: text/javascript; charset=UTF-8');
include_once("my_functions.php");

$action = $_GET['action'];

switch($action)
{
	case "get_ad":
		$ads = getAd();
		echo json_encode($ads);
		exit;
	break;

}


