<?php

	require_once('Registered.class.php');
	class Admin extends Registered{
		
		public function __construct($userName){
			parent::__construct($userName);
		}
		
		public function createUser($userData = array()){
			$newUser = new User();
			$result = $newUser->register($userData);
			return $result;
		}

		public function editUser($userName, $userData = array()){
			if(!empty($userData)){
				$editUser = new Registered($userName);
				$userId = $editUser->getUserId();
				foreach($userData as $key => $value){
					$result = false;
					switch($key){
						case 'userName':
							break;
						case 'firstName':
							$result = $editUser->setFirstName($value, $userId, true);
							break;
						case 'lastName':
							$result = $editUser->setLastName($value, $userId, true);
							break;
						case 'email':
							$result = $editUser->setEmail($value, $userId, true);
							break;
						case 'password':
							$result = $editUser->setPassword($value, $userId, true);
							break;
						case 'isAdmin':
							$result = $editUser->setIsAdmin($value, $this->userName);
							break;
					}
					if($result)
						echo "Updated $key successfully\n";
					else
						echo "Failed to update $key\n";
				}
			}
		}

		public function deleteUser(){
		
		}

		public function resetPassword($userName, $password = ""){
			$registered = new Registered($userName);
			if(isset($password) && $password != null){
				$result = $registered->setPassword($password, $registered->getUserId(), true);
			}else{
				$password = $this->createRandomPassword();
				$result = $registered->setPassword($password, $registered->getUserId(), true);
			}
			return $result;
		}

		public function createRandomPassword($length = 8){
			$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
			$password = "";
			for ($i = 0; $i < $length; $i++) {
				$x = mt_rand(0, strlen($chars) - 1);
				$password .= $chars[$x];
			}
			return $password;
		}

		public function createThreadCategory(){

		}
	}
