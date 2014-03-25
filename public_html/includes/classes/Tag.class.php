<?php

	/**
	* Tag class allows a thread to get and set the name of a tag
	*/
	class Tag {
		// ***** VARIABLES *****
		private $name = "Test name";
		// ***** VARIABLES *****

		// ***** CONSTRUCTOR *****
		// function __construct(argument)
		// {
		// 	# code...
		// }


		// ***** Getters & Setters *****

		public getName(){
			return $this->$name;
		}

		public setName($newName){
			$this->$name = $newName;
		}
	}

?>