<?php
include('constants.php');
class DataBase{
	public $connection;
	public $lastQuery;
	
	function __construct(){
		$this->db_connect();
		}
	function db_connect(){
		$mysqli=$this->connection =new MySQLi(SERVERNAME,USER,PASSWORD,DATABASE);
		if(mysqli_connect_errno()){
			header("location:error.php");
		}
	}
		
	
	}
?>