<?php

class Revenue extends Controller {

	public $ad_model;

	public function __construct() 
	{	
		$this->ad_model = $this->loadModel("ad_model");

		parent::__construct(true);
	}

	public function index()
	{	
		$header = $this->loadView('header');
		$header->render();
		$ads = $this->loadView('/show/revenue');

		$all_ads = $this->ad_model->getAds();


		$ads->set("all_ads", $all_ads);
		$ads->set("user", $this->authed_user);
		$ads->set("current_view", "revenue");
		$ads->render();
	}
}