<?php

class Groups extends Controller {

	public $entries_model;

	public function __construct() 
	{
		parent::__construct(true);
	}

	public function index()
	{	

		$group_model = $this->loadModel("group_model");
		$groups 	 = $group_model->getGroups();

		$header = $this->loadView('header');
		$header->render();
		$current = $this->loadView('/show/groups');
		$current->set("current_view", "groups");
		$current->set("user", $this->authed_user);
		$current->set("groups", $groups);
		$current->render();

	}

	public function add()
	{

		$data = $this->post();
		$group_model = $this->loadModel("group_model");

		if ($data) 
		{
			$user = $this->authed_user[0]->id;
			if ($user)
			{
				if ($group_model->createGroup($data)) 
				{
					Session_helper::set("saved_status", "success");
				}
				else {
					Session_helper::set("saved_status", "failed");
				}

			}

			$this->redirect("/groups");
			
		}

	}

	public function new_group() 
	{
		global $config;

		$header = $this->loadView('header');
		
		$header->render();

		$add_post = $this->loadView('show/new_group');
		$add_post->set("user", $this->authed_user);
		$add_post->set("current_view", "groups");

		$add_post->render();
	}

}