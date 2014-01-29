<?php
include_once("my_functions.php");

$action = $_GET['action'];

switch($action)
{
	case "click":
		$src = $_GET['src'];
		$id  = $_GET['id'];
		trackClick($id);

		header("Location: " . $src);
	break;

}





