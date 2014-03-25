<?php

class User{
	protected $userName = "Guest";
	protected $firstName = "Guest";
	protected $isAdmin = false;
	protected $lastName = "";
	protected $mysql;

	public function __construct(){
		$this->mysql = new mysqli(dbHost,dbUser,dbPass,dbName);
	}
	//searches for a thread that is on topic
	public function searchTread($topic){

	}

	//pulls data for threadId and returns it
	public function viewTread($threadId){

	}

	//receives user data and creates an account for them
	public function register($userData = array()){
		if(!empty($userData))
			$result = $this->mysql->query("INSERT INTO `user`(`firstName`, `lastName`, `userName`, `password`, `email`) VALUES ('{$userData['firstName']}','{$userData['lastName']}', '{$userData['userName']}','{$userData['password']}','{$userData['email']}');");
		if($result)
			return true;
		else
			return false;
	}

	//returns user firstName
	public function getFirstName(){
		return $this->firstName;
	}

	//sets user firstName
	public function setFirstName($firstName){
		$this->firstName = $firstName;
	}

	//returns user lastName
	public function getLastName(){
		return $this->lastName;
	}

	//sets user lastName
	public function setLastName($lastName){
		$this->lastName;
	}
	
	//returns isAdmin
	public function isAdmin(){
		return $this->isAdmin;
	}

}
