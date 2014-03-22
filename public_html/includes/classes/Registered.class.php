<?php

require_once('User.class.php');

class Registered extends User {
	private $userId;
	private $password;
	private $email;

	//returns the password of the user
	public getPassword(){
		return $this->password;
	}

	//sets the password for the user. Requires authorized userId to change the password.
	public setPassword($password, $userId){
		$this->password = $password;
	}

	//returns userId
	public getUserId(){
		return $this->userId;
	}

	public setUserId($userId){
		$this->userId = $userId;
	}

	//returns user email address
	public getEmail(){
		return $this->email;
	}

	//sets email address for user. Requires authorized userId to change email  addres
	public setEmail($email, $userId){
		$this->email = $email;
	}
	
	//creates a comment on a thread. Requires threadId. Returns true on success, false on failure.
	public createComment($threadId, $comment){
		
	}

	//logs in the user. returns true on success, false on failure
	public login($userName, $password){

	}
	
	//ups or lowers the rate of the comment
	public rateComments($commentId, $rate){

	}
}
