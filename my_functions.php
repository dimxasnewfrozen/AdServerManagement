<?php

mysql_connect('localhost','root','');
mysql_select_db('ads');

//mysql_connect("internal-db.s161334.gridserver.com", "db161334_kd_todo", "5U2DcGk1") or die('MySQL Error: '. mysql_error());
//mysql_select_db("db161334_kd_todo");



function getAd($group = false)
{

	if (@$_SERVER['HTTP_X_REQUESTED_WITH'] == "XMLHttpRequest")
	{
		$sql = "SELECT * from ads
			where g_id = '1'
			ORDER BY RAND() LIMIT 0,1";
		$result = mysql_query($sql) or die('"BAH MYSQL ERRRORRR!!"');
		$resultObjects = array();
		while($row = mysql_fetch_object($result)) $resultObjects[] = $row;

		updateImpression($resultObjects[0]->id);

		return $resultObjects;
	}
	else {
		return false;
	}
}

function updateImpression($ad_id)
{

	$ad_id = mysql_real_escape_string($ad_id);
	$sql = "UPDATE ads set impressions = impressions+1 where id = '$ad_id'";
	$result = mysql_query($sql) or die('"BAH MYSQL ERRRORRR!!"');
	
}


?>
