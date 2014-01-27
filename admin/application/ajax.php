<?php
session_start(session_id());

require("../base_app.php");

global $config;

$user_agent  = $_SERVER['HTTP_USER_AGENT'];
$session_id  = session_id();

$controller = new Controller();

$request = $_GET['request'];

switch ($request) {

	case "checkActive":

		$verification_model = $controller->loadModel("EmailVerification_model");
		$email = $_GET['email'];


		if ($email)
			if ($verification_model->checkIfActive($email) == 2) {
				$status = array("status" => "true");
			}
			else {
				$status = array("status" => "false");
			}
		else {
			$status = array("status" => "true");
		}
		
		echo json_encode($status);

	break;

}



?>