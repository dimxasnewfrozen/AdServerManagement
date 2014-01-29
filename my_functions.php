<?php

mysql_connect('localhost','root','');
mysql_select_db('ads');

function getAd($group)
{
	$group = mysql_real_escape_string($group);
	$sql = "select
				a.id, link_src, image_src, width, height
				from ads a
				left join ad_groups g
				on a.g_id = g.id
				where
				(select count(1) from impressions where aid = a.id) < impressions
				and start_date <= now()
				and guid = '$group'
				and a.status = 1
				ORDER BY RAND() LIMIT 0,1";

	$result = mysql_query($sql) or die('"BAH MYSQL ERRRORRR!!"');

	$resultObjects = array();
	while($row = mysql_fetch_object($result)) $resultObjects[] = $row;

	updateImpression($resultObjects[0]->id);

	return $resultObjects;

	
}

function updateImpression($ad_id)
{

	$ip =  $_SERVER["REMOTE_ADDR"];
	$ad_id = mysql_real_escape_string($ad_id);
	$sql = "INSERT into impressions (aid, ip_address, audit_date) VALUES ('$ad_id', '$ip', NOW())";
	$result = mysql_query($sql) or die('"BAH MYSQL ERRRORRR!!"');
	
}

function trackClick($ad_id)
{

	$ip =  $_SERVER["REMOTE_ADDR"];
	$ad_id = mysql_real_escape_string($ad_id);

	$query = "select id from ads where id = $ad_id";

	$result = mysql_query($query);
	if ($result)
	{
		$sql = "INSERT into clicks (aid, ip_address, audit_date) VALUES ('$ad_id', '$ip', NOW())";
		$result = mysql_query($sql) or die('"BAH MYSQL ERRRORRR!!"');
	}
}


function getSettings() {
	$query = "select * from settings";
	$result = mysql_query($query) or die('"BAH MYSQL ERRRORRR!!"');

	$setting_array = array();
	$resultObjects = array();
	while($row = mysql_fetch_object($result)) $resultObjects[] = $row;

	foreach ($resultObjects as $setting)
	{
		$setting_array[$setting->setting] = $setting->value;
	}

	return $setting_array;
}

?>
