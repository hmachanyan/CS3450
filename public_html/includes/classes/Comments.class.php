<?php
	/**
	* Comment class
	*/
	class Comment
	{	

		private $content;
		private $authorID;
		private $commentID;
		private $threadID;
		private $title;
		private $date;
		private $mysql;
		
		
	 	// ***** CONSTRUCTOR *****
	 	public function __construct($commentID, $createNew = false, $data = array()){
			$this->mysql = new mysqli(dbHost,dbUser,dbPass,dbName);

			if($createNew && isset($data) && is_array($data)){
				$threadID = $this->mysql->real_escape_string($data['threadID']);
				$authorID = $this->mysql->real_escape_string($data['authorID']);
				$content = $this->mysql->real_escape_string($data['content']);
				$title = $this->mysql->real_escape_string($data['title']);
				$date = date('Y m d');

				$query = "INSERT INTO `comment`(`threadID`, `authorID`, `content`,`title`,`date`)VALUES ('$threadID', '$authorID', '$content', '$title', CURDATE());";
				$result = $this->mysql->query($query);

				$this->content = $content;
				$this->authorID = $authorID;
				$this->commentID = $this->mysql->insert_id;
				$this->threadID = $threadID;
				$this->title = $title;
				$this->date = $date;
			}else{
				$query = "SELECT * FROM `comment` WHERE `commentID`='$commentID'";
				
				$result = $this->mysql->query($query);

				$data = $result->fetch_assoc();
				$this->content = $data['content'];
				$this->authorID = $data['authorID'];
				$this->threadID = $data['threadID'];
				$this->title = $data['title'];
				$this->date = $data['date'];
				$this->commentID = $data['commentID'];
			}
	 	}

		// ***** GETTERS *****
		public function getContent(){
			return $this->content;
		}

		public function getAuthId(){
			return $this->authID;
		}

		public function getTitle(){
			return $this->title;
		}

		public function getDate(){
			return $this->date;
		}

		// ***** SETTERS *****
		public function setContent($content){
			$content = $this->mysql->real_escape_string($content);
			$query = "UPDATE `comment` SET `content`='$content' WHERE commentID='{$this->commentID}'";
			$result = $this->mysql->query($query);
                        if($result === true){
                                $this->content = $content;
                        }
			return $result;
		}

		public function setAuthId($authorID){
			$authorID = $this->mysql->real_escape_string($authorID);
                        $query = "UPDATE `comment` SET `authorID`='$authorID' WHERE commentID='{$this->commentID}'";
                        $result = $this->mysql->query($query);
                        if($result === true){
                                $this->authorID = $authorID;
                        }
                        return $result;
		}

		public function setTitle($title){
			$title = $this->mysql->real_escape_string($title);
                        $query = "UPDATE `comment` SET `title`='$title' WHERE commentID='{$this->commentID}'";
                        $result = $this->mysql->query($query);
                        if($result === true){
                                $this->title = $title;
                        }
                        return $result;
		}

		public function setDate($date){
			$date = $this->mysql->real_escape_string($date);
                        $query = "UPDATE `comment` SET `date`='$date' WHERE commentID='{$this->commentID}'";
                        $result = $this->mysql->query($query);
			if($result === true){
				$this->date = $date;
			}
                        return $result;
		}
	}


?>
