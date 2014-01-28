<?php

class Ad extends Controller {

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
		$ads = $this->loadView('/show/ads');

		$all_ads = $this->ad_model->getAds();


		$ads->set("all_ads", $all_ads);
		$ads->set("user", $this->authed_user);
		$ads->set("current_view", "ads");
		$ads->render();
	}

	public function add()
	{

		global $config;

		$data = $_POST;
		//$ad_model = $this->loadModel("ad_model");
		if ($data) 
		{
			$user = $this->authed_user[0]->id;
			if ($user)
			{
				if ($data['client'] == "new")
				{
					// add new client
					// return client_id
					$client_model = $this->loadModel("client_model");
					$client_id = $client_model->addClient($data);
				}
				else {
					$client_id = $data['client'];
				}

				// add the file to the system
				if ($_FILES["file"]["name"])
				{
					$allowedExts = array("gif", "jpeg", "jpg", "png");
					$temp = explode(".", $_FILES["file"]["name"]);
					$extension = strtolower(end($temp));

					$hash 	   = sha1(date("Y,m d h:m:s"));

					$filename  = $temp[0] . $hash . "." . $extension;
					$file_path = $config['upload_path']. "/" . $filename;
					$file_link = $config['upload_url']. "/" . $filename;


					if ((($_FILES["file"]["type"] == "image/gif")
					|| ($_FILES["file"]["type"] == "image/jpeg")
					|| ($_FILES["file"]["type"] == "image/jpg")
					|| ($_FILES["file"]["type"] == "image/pjpeg")
					|| ($_FILES["file"]["type"] == "image/x-png")
					|| ($_FILES["file"]["type"] == "image/png")) 
						&& ($_FILES["file"]["size"] < 1000000) 
						&& in_array($extension, $allowedExts))
					{
					  	if ($_FILES["file"]["error"] > 0)
					  	{
					  		echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
					  	}
					  	else
					  	{
						    if (file_exists($file_path))
						    {
						      echo $_FILES["file"]["name"] . " already exists.";
						    }
						    else
						    {
						      move_uploaded_file($_FILES["file"]["tmp_name"], $file_path);
						    }
						}
					}
					else
					{
						echo "Invalid file";
						exit;
					}

				}
				else {
					$file_link = $data['file_location'];
				}
				

				
				$this->ad_model->createAd($client_id, $data, $file_link);

			}

			$this->redirect("/ad");
		
		}
	}

	public function new_add()
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
		$add_post->set("current_view", "ads");
		$add_post->set("groups", $groups);
		$add_post->set("clients", $clients);

		$add_post->render();

	}

}