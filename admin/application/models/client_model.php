<?php

class Client_model extends Model
{
	
	public function getClients()
	{
		$query = "select * from clients";
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

	public function addClient($data) 
	{
		global $config;

		$company_name = $this->escapeString($data['company_name']);
		$first_name = $this->escapeString($data['first_name']);
		$last_name = $this->escapeString($data['last_name']); 
		$phone_number = $this->escapeString($data['phone_number']); 
		$email_address = $this->escapeString($data['email_address']); 


		$query = "INSERT into clients (company, first_name, last_name, phone_number, email_address, create_date) VALUES 
					($company_name, $first_name, $last_name, $phone_number, $email_address, now())";

		if ($this->execute($query))
			return mysql_insert_id();				  
	
	}

}

