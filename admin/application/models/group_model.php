<?php

class Group_model extends Model
{
	
	public function getGroups()
	{
		$query = "select * from ad_groups";
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

	public function createGroup($data) 
	{
		global $config;

		$group_name = $this->escapeString($data['group_name']);
		$width = $this->escapeString($data['width']);
		$height = $this->escapeString($data['height']); 
		$group_id = substr(md5(rand()), 0, 15);

		$query = "INSERT into ad_groups (guid, group_name, width, height) VALUES 
					('$group_id', $group_name, $width, $height)";

		if ($this->execute($query))
			return "success";					  
	
	}

}

