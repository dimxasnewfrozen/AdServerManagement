<?php

class Settings extends Controller {

	public $ad_model;

	public function __construct() 
	{	
		$this->settings_model = $this->loadModel("settings_model");

		parent::__construct(true);
	}

	public function index()
	{	
		$header = $this->loadView('header');
		$header->render();
		$ads = $this->loadView('/show/settings');

		$settings = $this->settings_model->getSettings();

		$ads->set("user", $this->authed_user);
		$ads->set("current_view", "settings");
		$ads->set("settings", $settings);
		$ads->render();
	}


}