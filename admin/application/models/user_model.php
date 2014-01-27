<?php

class User_model extends Model
{
	
	public function getById($id)
	{

		$id = $this->escapeString($id);
		$query = "SELECT id, first_name, last_name, email_address, address, city, state, status, user_type, title, privilege, business_type 
					FROM users where id = $id ";
		$result = $this->query($query);
		if ($result)
			return $result;
		else {
			return false;
		}

	}

	public function getByEmail($email_address)
	{

		$email_address = $this->escapeString($email_address);
		$query = "SELECT id FROM users where email_address = $email_address ";
		$result = $this->query($query);
		if ($result)
			return $result[0]->id;

	}


	public function createUser($data) 
	{
		global $config;

		$address = $this->escapeString($data['address']);
		$city = $this->escapeString($data['city']);
		$state = $this->escapeString($data['state']); 
		$first_name = $this->escapeString($data['firstname']);
		$last_name = $this->escapeString($data['lastname']);
		$type = $this->escapeString($data['type']);
		$email_address = $this->escapeString($data['email_address']);
		$password = $this->escapeString(md5($config['salt'] . $data['mm_password'] . $config['salt']));

		if (($address == "") || ($city == "") || ($state == "") || ($first_name == "") || 
			($last_name == "") || ($email_address == "") || ($data['mm_password'] == "")) 
		{
			return 0;
		}

		// check if email exists
		$query = "SELECT id FROM users where email_address = $email_address ";
		$result = $this->query($query);

		if ($result) {
			return "exists";
		}
		else 
		{
			$query = "INSERT into users (first_name, last_name, email_address, password, address, city, state, date_created, user_type) VALUES 
					($first_name, $last_name, $email_address, $password, $address, $city, $state, now(), $type)";

			if ($this->execute($query))
				return "success";					  

		}
	
	}

}

