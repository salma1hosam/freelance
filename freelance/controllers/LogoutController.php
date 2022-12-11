<?php 

if(isset($_POST["logout"])){
		include'../models/UsersClass.php';
		$user = new users();
		$user->logout();
		header("Location: ../html/Login.php");	
		}
		
?>