<?php
	/**
	* Comment class
	*/
	class Comment
	{	

		private $content;
		private $authID;
		private $commentID;
		private $threadID;
		private $title;
		private $date;
		
		
	 	// ***** CONSTRUCTOR *****
	 	public function __construct($createNew = false, $commentId = 0){
	 		$this->content = "Hello";
	 	}

		public function getContent(){
			return $this->content;
		}

		public function getAuthId(){
			return $this->authID;
		}
	}


?>
