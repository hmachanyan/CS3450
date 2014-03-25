<?php

require_once('User.class.php');

class Registered extends User {
	private $userId;
	private $password;
	private $email;

	//returns the password of the user
	public function getPassword(){
		return $this->password;
	}

	//sets the password for the user. Requires authorized userId to change the password.
	public function setPassword($password, $userId){
		$this->password = $password;
	}

	//returns userId
	public function getUserId(){
		return $this->userId;
	}

	public function setUserId($userId){
		$this->userId = $userId;
	}

	//returns user email address
	public function getEmail(){
		return $this->email;
	}

	//sets email address for user. Requires authorized userId to change email  addres
	public function setEmail($email, $userId){
		$this->email = $email;
	}
	
	//creates a comment on a thread. Requires threadId. Returns true on success, false on failure.
	public function createComment($threadId, $comment){
		
	}

	//logs in the user. returns true on success, false on failure
	public function login($userName, $password){

	}
	
	//ups or lowers the rate of the comment
	public function rateComments($commentId, $rate){

	}
	
	//creates a thread under the user. Receives the threadName, subject of thread, tags associated with thread
	//and the body of the thread. Returns true on successful creation of thread false on failure.
	public function createThread($threadName, $subject, $tags, $body){

	}
	
	//function to edit thread
	public function editThread(){
		
	}

	//function to delete thread. Returns true on success, false on failure
	public function deleteThread($threadId){

	}

	//edits comments. Receives comment id and edited comment string. Returns true on success, false on failure
	public function editComment($commentId, $comment){

	}

	//delets a comment. Receives commentId. Returns true on success, false on failure
	public function deleteComment($commentId){
		
	}
}
