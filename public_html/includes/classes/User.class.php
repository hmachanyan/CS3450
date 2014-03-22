<?php

class User{
	private $firstName = "Guest";
	private $isAdmin = false;
	private $lastName = "";

	//searches for a thread that is on topic
	public searchTread($topic){

	}

	//pulls data for threadId and returns it
	public viewTread($threadId){

	}

	//receives user data and creates an account for them
	public register($userData = array()){

	}

	//returns user firstName
	public getFirstName(){
		return $this->firstName;
	}

	//sets user firstName
	public setFirstName($firstName){
		$this->firstName = $firstName;
	}

	//returns user lastName
	public getLastName(){
		return $this->lastName;
	}

	//sets user lastName
	public setLastName($lastName){
		$this->lastName;
	}
	
	//returns isAdmin
	public isAdmin(){
		return $this->isAdmin;
	}

	//set isAdmin. Requires username of an user that is already an admin.
	public setIsAdmin($isAdmin, $adminUser){
		
	}
}
