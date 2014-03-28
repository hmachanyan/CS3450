<?php

	require_once('Tag.class.php');

	class Thread{

		// ***** VARIABLES *****
		private $title = "Test Title";
		private $status = "T";
		private $authorID = "0";
		private $date = "01/01/14";
		// ***** VARIABLES *****

		// ***** CONSTRUCTOR *****
		// function __construct(argument)
		// {
		// 	# code...
		// }

		
		// ***** GETTERS & SETTERS *****

		public function getTitle(){
<<<<<<< HEAD
			return this->$title;
=======
			return $this->$title;
>>>>>>> 926db2d7463da4cc457f8e4da7990981e38ba05c
		}

		public function setTitle($newTitle){
			$this->$title = $newTitle;
		}

		public function getStatus(){
<<<<<<< HEAD
			return this->$title;
=======
			return $this->$title;
>>>>>>> 926db2d7463da4cc457f8e4da7990981e38ba05c
		}

		public function setStatus($newStatus){
			$this->$status = $newStatus;
		}

		public function getAuthorID(){
<<<<<<< HEAD
			return this->$authorID;
=======
			return $this->$authorID;
>>>>>>> 926db2d7463da4cc457f8e4da7990981e38ba05c
		}

		public function setAuthorID($newAuthorID){
			$this->$authorID = $newAuthorID;
		}
		
		public function getDate(){
<<<<<<< HEAD
			return this->$date;
=======
			return $this->$date;
>>>>>>> 926db2d7463da4cc457f8e4da7990981e38ba05c
		}

		public function setDate($newDate){
			$this->$date = $newDate;
		}
	}
?>
