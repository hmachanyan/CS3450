<?php

	require_once('Tag.class.php');

	class Thread{

		// ***** VARIABLES *****
		private $title = "Test Title";
		private $status = "T";
		private $authorID = "0";
		private $date = "01/01/14"
		// ***** VARIABLES *****

		// ***** CONSTRUCTOR *****
		// function __construct(argument)
		// {
		// 	# code...
		// }

		
		// ***** GETTERS & SETTERS *****

		public getTitle(){
			return this->$title;
		}

		public setTitle($newTitle){
			$this->$title = $newTitle;
		}

		public getStatus(){
			return this->$title;
		}

		public setStatus($newStatus){
			$this->$status = $newStatus;
		}

		public getAuthorID(){
			return this->$authorID;
		}

		public setAuthorID($newAuthorID){
			$this->$authorID = $newAuthorID;
		}
		
		public getDate(){
			return this->$date;
		}

		public setDate($newDate){
			$this->$date = $newDate;
		}
	}
?>