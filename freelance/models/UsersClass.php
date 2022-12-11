<?php 


class users {
	
    private $f_name;
    private $l_name;
    private $phone;
	private $type;
	private $pass;
	private $cpass;
	private $db;
	
	function __construct() {
		include_once'../include/DatabaseClass.php';		
		$this->db = new database();
	}
	
	
	function login($username , $password) {
        $this->username = $username;
		$this->password = $password;
		$sql = "SELECT * FROM users WHERE user_name='$this->username'";
		$row = $this->db->select($sql);
		if ($row['password'] === $this->password) {
			session_start();
			//$_SESSION['id'] = $row['id'];
            $_SESSION['username']=$row['username'];
           // $_SESSION['name'] = $row['name'];
			$_SESSION['type'] = $row['type'];
				
			$this->db->close();	
			return true;
		}
		$this->db->close();	
		return false;
    }
	
	function logout() {
       
		session_start();
		unset($_SESSION['id']);
        unset($_SESSION['username']);
		unset($_SESSION['password']);
        unset($_SESSION['name']);
		unset($_SESSION['type']);
		session_destroy();
    }
	
	public function usersinfo($info) {       
        include_once'../include/DatabaseClass.php';		
		$this->db = new database();
		$this->username = $info['username'];
		$this->password = $info['password'];
		$this->name = $info['name'];
		$this->type = $info['type'];
    }
	
	
	function getID(){
		return $this->id;
	}

	function getUsername(){
		return $this->username;
	}
	
	function getPassword(){
		return $this->password;
	}
	
	function getname(){
		return $this->name;
	}
	
	
	function setID($id){
		$this->id = $id;
	}
	
	function setUsername($username){
		$this->username = $username;
	}
	
	function setPassword($password){
		$this->password = $password;
	}
	
	function setname($name){
		$this->name = $name;
	}
	
}















?>