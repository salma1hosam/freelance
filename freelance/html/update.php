<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../include/freelacers.css">
    <title>change password</title>
</head>
<body>
    <h1 class = "Hdelete">change password</h1>
    <form action="../html/update.php" method ="POST" class = "deletForm">
        <label>username</label>
        <input type="text" name="user_name" placeholder = "enter your username">
        <label>new password</label>
        <input type="text" name="password" placeholder = "enter your new password">
        <div>
        <input type="submit" name="update" value = "update"><br>
        </div>
    </form>
</body>
</html>
<?php
$connection = mysqli_connect("localhost" , "root" , "");
$db = mysqli_select_db($connection, 'project');
if(isset($_POST['update'])){
    //include 'conn.php';
    $firstname = $_POST['user_name']; 
    $password = $_POST['password']; 
    $query = "UPDATE users SET pass='$password' WHERE user_name='$firstname'";
    $result = mysqli_query($connection,$query );
    if($result){
        echo '<script type="text/javascript"> alert("password changed") </script>';
    }
    else {
        echo '<script type="text/javascript"> alert("password not changed") </script>';
    }
   // mysqli_close($conn);
}
?>