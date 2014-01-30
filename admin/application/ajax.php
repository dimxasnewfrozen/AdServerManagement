<?php
session_start(session_id());

require("../base_app.php");

global $config;

$user_agent  = $_SERVER['HTTP_USER_AGENT'];
$session_id  = session_id();

$controller = new Controller();

$request = $_GET['request'];

switch ($request) {

	case "getOverallImpressions":

		$ad_model = $controller->loadModel("ad_model");
		$data = $ad_model->getBarImpressions();
		echo json_encode($data);
		
	break;

	case "getOverallClicks":

		$ad_model = $controller->loadModel("ad_model");
		$data = $ad_model->getBarClicks();
		echo json_encode($data);
		
	break;

}



?>