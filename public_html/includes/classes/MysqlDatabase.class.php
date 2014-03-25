<?php

class MysqlDatabase{
	private $mysql;
	private $host;
	private $userName;
	private $pass;
	private $database;
	private $error;

	public function __construct(){
		$this->host = dbHost;
		$this->userName = dbUser;
		$this->pass = dbPass;
		$this->database = dbName;

		$this->mysql = new mysqli($this->host, $this->userName, $this->pass, $this->database);
		$this->error = $this->mysql->error;
	}
	
	public function query($query){
		$query = $this->mysql->real_escape_string($query);
		return $this->mysql->query($query);
	}
}
