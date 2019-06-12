<?php
class user{
	public $host="localhost";
	public $username="root";
	public $pass="";
	public $db_name="quiz_oops";
	public $conn;
	
	public function __construct()
	{
	$this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
		if($this->conn->connect_errno)
		{
		die("database connection failed".$this->conn->connect_errno);
		}
	}
	
	public function admin($dataa)
	{
		$this->conn->query(dataa);
	}
}

?>