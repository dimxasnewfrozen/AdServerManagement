<?php

class Settings_model extends Model
{

	public function getSettings()
	{

		$setting_array = array();

		$query = "select * from settings";
		$settings = $this->query($query);

		foreach ($settings as $setting)
		{
			$setting_array[$setting->setting] = $setting->value;
		}
		
		return $setting_array;
	}	
}


?>