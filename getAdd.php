<?php
header('Access-Control-Allow-Origin: localhost');
header('Content-Type: text/html; charset=UTF-8');
include_once("my_functions.php");

$action = $_GET['action'];

switch($action)
{
	case "get_ad":

		$adSlot = $_GET['adSlot'];
		$ads = getAd($adSlot);
		$settings = getSettings();

		if ($ads)
		{
			$image = $ads[0]->image_src;
			$height = $ads[0]->height;
			$width = $ads[0]->width;
			$link_src = $ads[0]->link_src;
			$id = $ads[0]->id;
			echo "<a href='" . $settings['Base Ad Url'] . "/adclick.php?action=click&id=" . $id . "&src=" . $link_src . "' target='_parent'><img src='$image' style='height:$height; width:$width; margin:-8px; padding:0px;' /></a>";
		}
		else {
			return false;
		}
		
	break;


	case "click":
		$src = $_GET['src'];
		$id  = $_GET['id'];
		trackClick($id);
		header("Location: " . $src);
	break;

}





