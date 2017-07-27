<?php
class DB{
	private $mysqli;
	function __construct()
	{
		$this->mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
	}
	function insert($query){
		mysqli_query($this->mysqli, "SET character_set_client='".DB_ENCODING_CLIENT."'");
		mysqli_query($this->mysqli, "SET character_set_connection='".DB_ENCODING_CONNECTION."'");
		mysqli_query($this->mysqli, "SET character_set_results='".DB_ENCODING_RESULTS."'");
		mysqli_query($this->mysqli,$query);
	}
	function select($query){
		$this->mysqli->query("SET NAMES '".DB_ENCODING_CLIENT."'");
		return $this->mysqli->query($query);
	}
	function update($query){
		//
	}
	function delete($query){
		// test
	}
	function __destruct()
	{
		$this->mysqli->close();
	}
	
}