<?php
require_once('config.php');


class Database{

	public $conn;

	public function __construct(){
		$this->connect_db();
	}

	public function connect_db(){
		$this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		if($this->conn->connect_error){
			die('Database connection failed badly ' . $this->conn->connect_error);
		}
	}

	public function query($sql){
		$result = $this->conn->query($sql);
		$this->confirm_query($result);
		return $result;
	}

	private function confirm_query($result){
		if(!$result){
			die("Query failed ; " . $this->conn->error($this->conn));
		}
	}

	public function escape_string($string){
		$escaped = $this->conn->real_escape_string($string);
		return $escaped;
	}

	public function the_insert_id(){
		return $this->conn->insert_id;
	}
}

$database = new Database();
