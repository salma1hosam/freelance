<?php 


class database {

    private $host;
    private $user;
    private $password;
    private $database;
    public $conn;


	function __construct() {
        
		$host = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbName = "project";
		$this->host = $host;
        $this->user = $dbuser;
        $this->password = $dbpass;
        $this->database = $dbName;
		$conn=new mysqli($host, $dbuser, $dbpass, $dbName);
        //$this->connect();
    }
	
	
	
	function connect() {
        if (!$this->conn = new mysqli($this->host, $this->user, $this->password, $this->database)) {
            throw new Exception("Error:not connected to the server or not found database.");
        }
    }

    function close() {
        $this->conn->close();
    }
}