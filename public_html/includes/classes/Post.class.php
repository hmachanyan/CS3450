<?php

	require_once('Thread.class.php');

	/**
	* Post Class
	*/
	class Post extends Thread
	{

		// ***** VARIABLES *****
		private $content = "Test content";
		// ***** VARIABLES *****

		// ***** CONSTRUCTORS ******
		// function __construct(argument)
		// {
		// 	# code...
		// }

		// ***** GETTERS & Setters *****
		public getConent(){
			return $this->$content;
		}

		public setContent($newContent){
			$this->$content = $newContent;
		}
	}
?>