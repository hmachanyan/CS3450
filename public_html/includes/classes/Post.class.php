<?php
	require_once("Thread.class.php");

	/**
	* Post Class
	*/
	class Post
	{

		// ***** VARIABLES *****
		private $content = "Test content";
		private $comments = array();

		// ***** VARIABLES *****

		// ***** CONSTRUCTORS ******
		// function __construct(argument)
		// {
		// 	# code...
		// }


		// add comment
		public function addComment($commentContent){
			array_push($comments,)
		}
		// delete comment
		// edit comment

		// add post

		// edit post

		// delete post




		// ***** GETTERS & Setters *****
		public function getConent(){
			return $this->$content;
		}

		public function setContent($newContent){
			$this->$content = $newContent;
		}
	}
?>
