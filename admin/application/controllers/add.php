<?php

class Add extends Controller {

	public $entries_model;

	public function __construct() 
	{
		parent::__construct(true);
	}

	public function index()
	{	
	}


	public function item($type)
	{

		switch ($type) 
		{

			case "add":
				$this->newAdPage();
			break;			

			case "group":
				$this->newGroupPage();
			break;
		}
	}

	public function newAdPage()
	{
		global $config;

		$group_model = $this->loadModel("group_model");
		$client_model = $this->loadModel("client_model");
		$groups 	 = $group_model->getGroups();
		$clients 	 = $client_model->getClients();

		$header = $this->loadView('header');
		
		$header->render();

		$add_post = $this->loadView('show/add');
		$add_post->set("user", $this->authed_user);
		$add_post->set("current_view", "current");
		$add_post->set("groups", $groups);
		$add_post->set("clients", $clients);

		$add_post->render();
	}


	public function newGroupPage()
	{
		global $config;

		$header = $this->loadView('header');
		
		$header->render();

		$add_post = $this->loadView('show/new_group');
		$add_post->set("user", $this->authed_user);
		$add_post->set("current_view", "groups");

		$add_post->render();
	}



	public function submit() 
	{
		$data = $this->post();
		$group_model = $this->loadModel("group");

		if ($data) 
		{
			if (isset($data['subject']) && isset($data['message']))
			{
				$user = $this->authed_user[0]->id;

				if ($this->entries_model->add($user, $data)) 
				{
					Session_helper::set("saved_status", "success");
				}
				else {
					Session_helper::set("saved_status", "failed");
				}

				$this->redirect("/show/current");
			}
		}
	}

}