<?php

class Ad_model extends Model
{
	
	public function getAds()
	{
		$query = "select *, a.id as ad_id, 
					(select count(1) from impressions where aid = a.id) as impression_count,
					(select count(1) from clicks where aid = a.id) as click_count
					from ads a
					left join clients c
					on a.c_id = c.id
					left join ad_groups g
					on a.g_id = g.id
					where a.status = 1
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
		$query = "select * from ads a
		left join clients c
		on a.c_id = c.id
		left join ad_groups g
		on a.g_id = g.id
		where a.id = $id";
		$result = $this->query($query);
		if ($result)
			return $result;
		else {
			return false;
		}

	}

	public function createAd($client_id, $data, $file_link) 
	{
		$website_location = $this->escapeString($data['website_location']);
		$ad_group = $this->escapeString($data['ad_group']);
		$max_impressions = $this->escapeString($data['max_impressions']); 

		$date = date('Y-m-d', strtotime($data['start_date']));
		$start_date = $this->escapeString($date); 



		$query = "INSERT into ads (c_id, g_id, link_src, image_src, impressions, start_date) VALUES 
					('$client_id', $ad_group, $website_location, '$file_link', $max_impressions, $start_date)";

		if ($this->execute($query))
			return "success";					  
	
	}

	public function removeAd($id)
	{

		$id = $this->escapeString($id); 
		$query = "update ads set status = 0 where id = $id";

		if ($this->execute($query))
		{
			return true;
		}		
		else {
			return false;
		}
	}

	public function generateStats($ad_id) 
	{
		$ad_id = $this->escapeString($ad_id); 

		$today = date('Y-m-d', strtotime("now"));
		$now = date('Y-m-d G:i:s', strtotime("now"));
		$start_of_week = date('Y-m-d 00:00:00', strtotime( "previous monday" ));
		$start_of_month = date('Y-m-01 00:00:00');


		$i_query = "select
			  (select count(1) from impressions where aid = $ad_id and audit_date like '$today%') as impressions_today,
			  (select count(1) from impressions where aid = $ad_id and (audit_date >= '$start_of_week' and audit_date <= '$now')) as impressions_this_week,
			  (select count(1) from impressions where aid = $ad_id and (audit_date >= '$start_of_month' and audit_date <= '$now')) as impressions_this_month,
			  (select count(1) from impressions where aid = $ad_id) as total_impressions";

		$result = $this->query($i_query);
		$data['impressions'] = $result;


		$c_query = "select
			  (select count(1) from clicks where aid = $ad_id and audit_date like '$today%') as clicks_today,
			  (select count(1) from clicks where aid = $ad_id and (audit_date >= '$start_of_week' and audit_date <= '$now')) as clicks_this_week,
			  (select count(1) from clicks where aid = $ad_id and (audit_date >= '$start_of_month' and audit_date <= '$now')) as clicks_this_month,
			  (select count(1) from clicks where aid = $ad_id) as total_clicks";
		$result = $this->query($c_query);
		$data['clicks'] = $result;

		return $data;

	}



}

