<?php 
session_start();
?>
<?php 
include 'db.php';
if(isset($_POST['submit'])){
    $_SESSION["user_name"]=$_POST['email'];
    $type= $_POST['type'];
    $sql = "SELECT user_name , pass FROM users WHERE user_name = '{$_POST['email']}' AND  pass = {$_POST['pass']}";
    $result = $conn->query($sql);
    if($row = $result->fetch_assoc()){
        if($type=="admin"){
            header("Location: ../html/Admin.php");
        }
        elseif($type=="freelancer"){
            header("Location: ../html/CV.php");
        }
        else{
            
            header("Location: ../html/client.php ");  
        }
        
    }else{
        header("Location: ../html/Login.php?connection-failed");
    }
} 
?> 

<!-- 
$typ= "SELECT user_type FROM users WHERE user_name = '{$_POST['email']}' AND  pass = {$_POST['pass']}";
    $result = $conn->query($typ);
    if($row = $result->fetch_assoc()){
        if($typ=="admin"){
            header("Location: ../html/Admin.php");
        }
        elseif($typ=="freelancer"){
            header("Location: ../html/CV.php");
        }
        else{
            
            header("Location: ../html/client.php ");  
        }
        
    }else{
        header("Location: ../html/Login.php?connection-failed");
    }
}  -->