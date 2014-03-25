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
			return $this->$title;
		}

		public function setTitle($newTitle){
			$this->$title = $newTitle;
		}

		public function getStatus(){
			return $this->$title;
		}

		public function setStatus($newStatus){
			$this->$status = $newStatus;
		}

		public function getAuthorID(){
			return $this->$authorID;
		}

		public function setAuthorID($newAuthorID){
			$this->$authorID = $newAuthorID;
		}
		
		public function getDate(){
			return $this->$date;
		}

		public function setDate($newDate){
			$this->$date = $newDate;
		}
	}
?>
