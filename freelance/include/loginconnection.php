<?php 

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "project";

$conn = new mysqli();
$conn->connect($serverName, $dbUsername, $dbPassword, $dbName);

//if conn failed
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){
    $type= $_POST['type'];
    $sql = "SELECT user_name , pass FROM users WHERE user_name = '{$_POST['email']}' AND  pass = {$_POST['pass']}";
    $result = $conn->query($sql);
    if($row = $result->fetch_assoc()){
        if($type=="admin"){
            header("Location: ../html/Admin.php");
        }
        elseif($type=="freelancer"){
            header("Location: ../html/Freelancers.php");  
        }
        else{
           
            header("Location: ../html/client.php ");
        }
        
    }else{
        header("Location: ../html/Login.php?connection-failed");
    }
} 
?> 