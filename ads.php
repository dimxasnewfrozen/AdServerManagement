<?php

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


