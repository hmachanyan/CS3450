<?php

require_once('User.class.php');

class Registered extends User {
	private $userId;
	private $password;
	private $email;

	//constructor. Requires username.
	public function __construct($userName){
		parent::__construct();
		$result = $this->mysql->query("SELECT * FROM user WHERE username='{$userName}';");

		if($result->num_rows === 1){
			$data = $result->fetch_assoc();
			$this->userId = $data['userID'];
			$this->userName = $data['userName'];
			$this->password = $data['password'];
			$this->firstName = $data['firstName'];
			$this->lastName = $data['lastName'];
			$this->email = $data['email'];
			$this->isAdmin = $data['isAdmin'];
		}
	}

	//returns the password of the user
	public function getPassword(){
		return $this->password;
	}

	//returns userId
	public function getUserId(){
		return $this->userId;
	}

	//returns user email address
	public function getEmail(){
		return $this->email;
	}

	//sets the password for the user. Requires authorized userId to change the password.
	public function setPassword($password, $userId, $auth = false){
		$userId = $this->mysql->real_escape_string($userId);
		$password = $this->mysql->real_escape_string($password);
		$query1 = "SELECT `isAdmin` FROM `user` WHERE userID = '$userId';";
		$query2 = "UPDATE `user` SET `password`= '$password' WHERE userName = '{$this->userName}' AND userID = '{$this->userId}';";

		if($auth === false && $userId == $this->userId)
			$auth = true;
		elseif($auth === false){
			$result = $this->mysql->query($query1);
			$data = $result->fetch_assoc();
			if($data['isAdmin']){
				$auth = true;
			}
		}

		if($auth){
			$result = $this->mysql->query($query2);
			$this->password = $password;
			return true;
		}else{
			return false;
		}
	}


	//sets email address for user. Requires authorized userId to change email address
	public function setEmail($email, $userId, $auth = false){
                $userId = $this->mysql->real_escape_string($userId);
                $email = $this->mysql->real_escape_string($email);
                $query1 = "SELECT `isAdmin` FROM `user` WHERE userID = '$userId';";
                $query2 = "UPDATE `user` SET `email`= '$email' WHERE userName = '{$this->userName}' AND userID = '{$this->userId}';";

                if($auth === false && $userId == $this->userId){
                        $auth = true;
		}elseif($auth === false){
                        $result = $this->mysql->query($query1);
                        $data = $result->fetch_assoc();
                        if($data['isAdmin']){
                                $auth = true;
                        }
                }

                if($auth){
                        $result = $this->mysql->query($query2);
                        $this->email = $email;
                        return true;
                }else{
                        return false;
                }
	}

	//set isAdmin. Requires username of an user that is already an admin.
        public function setIsAdmin($isAdmin, $adminUser){
		$auth = false;
                $isAdmin = $this->mysql->real_escape_string($isAdmin);
                $adminUser = $this->mysql->real_escape_string($adminUser);
                $query1 = "SELECT `isAdmin` FROM `user` WHERE userID = '$adminUser';";
                $query2 = "UPDATE `user` SET `isAdmin`= '$isAdmin' WHERE userName = '{$this->userName}' AND userID = '{$this->userId}';";

                $result = $this->mysql->query($query1);
                $data = $result->fetch_assoc();
                if($data['isAdmin']){
                	$auth = true;
                }

                if($auth){
                        $result = $this->mysql->query($query2);
                        $this->isAdmin = $isAdmin;
                        return true;
                }else{
                        return false;
                }
 
        }

	//sets user lastName
        public function setLastName($lastName, $userId, $auth = false){
                $userId = $this->mysql->real_escape_string($userId);
                $lastName = $this->mysql->real_escape_string($lastName);
                $query1 = "SELECT `isAdmin` FROM `user` WHERE userID = '$userId';";
                $query2 = "UPDATE `user` SET `email`= '$lastName' WHERE userName = '{$this->userName}' AND userID = '{$this->userId}';";

                if($auth === false && $userId == $this->userId)
                        $auth = true;
                elseif($auth === false){
                        $result = $this->mysql->query($query1);
                        $data = $result->fetch_assoc();
                        if($data['isAdmin']){
                                $auth = true;
                        }
                }

                if($auth){
                        $result = $this->mysql->query($query2);
                        $this->lastName = $lastName;
                        return true;
                }else{
                        return false;
                }
        }
        //sets user firstName
        public function setFirstName($firstName, $userId, $auth = false){
                $userId = $this->mysql->real_escape_string($userId);
                $firstName = $this->mysql->real_escape_string($firstName);
                $query1 = "SELECT `isAdmin` FROM `user` WHERE userID = '$userId';";
                $query2 = "UPDATE `user` SET `email`= '$firstName' WHERE userName = '{$this->userName}' AND userID = '{$this->userId}';";

                if($auth === false && $userId == $this->userId)
                        $auth = true;
                elseif($auth === false){
                        $result = $this->mysql->query($query1);
                        $data = $result->fetch_assoc();
                        if($data['isAdmin']){
                                $auth = true;
                        }
                }

                if($auth){
                        $result = $this->mysql->query($query2);
                        $this->firstName = $firstName;
                        return true;
                }else{
                        return false;
                }
        }



	//logs in the user. returns true on success, false on failure
	public function login($userName, $password){
		if(strcmp($password,$this->password) === 0 && strcmp($userName, $this->userName) === 0)
			return true;
		else
			return false;
	}

	//creates a comment on a thread. Requires threadId. Returns true on success, false on failure.
	public function createComment($threadId, $comment){
		
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
