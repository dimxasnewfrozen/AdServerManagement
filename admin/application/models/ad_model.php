<?php

class Ad_model extends Model
{
	
	public function getAds()
	{
		$query = "select * from ads a
					left join clients c
					on a.c_id = c.id
					order by a.id desc";
		$result = $this->query($query);
		if ($result)
			return $result;
		else {
			return false;
		}

	}

	public function getById($id)
	{

		$id = $this->escapeString($id);
		$result = $this->query($query);
		if ($result)
			return $result;
		else {
			return false;
		}

	}

	public function createAd($client_id, $data, $file_link) 
	{
		global $config;


		$website_location = $this->escapeString($data['website_location']);
		$ad_group = $this->escapeString($data['ad_group']);
		$max_impressions = $this->escapeString($data['max_impressions']); 
		$start_date = $this->escapeString($data['start_date']); 

		$query = "INSERT into ads (c_id, g_id, link_src, image_src, impressions, start_date) VALUES 
					('$client_id', $ad_group, $website_location, '$file_link', $max_impressions, $start_date)";

		if ($this->execute($query))
			return "success";					  
	
	}

}

