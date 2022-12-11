<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../include/freelacers.css">
    <title>Delete Data</title>
</head>
<body>
    <h1 class = "Hdelete">delet data from the database</h1>
    <form action="" method ="POST" class = "deletForm">
        <label>user_name</label>
        <input type="text" name="user_name" placeholder = "enter user_name to delet the data">
        <div>
        <input type="submit" name="delete" value = "delete data"><br>
        </div>
    </form>
</body>
</html>
<?php
$connection = mysqli_connect("localhost" , "root" , "");
$db = mysqli_select_db($connection, 'project');
if(isset($_POST['delete'])){
    include 'conn.php';
    $firstname = $_POST['user_name']; 
    $query = "DELETE FROM form WHERE d_project='$firstname'";
    $result = mysqli_query($connection,$query );
    if($result){
        echo '<script type="text/javascript"> alert("DATA DELETED") </script>';
    }
    else {
        echo '<script type="text/javascript"> alert("DATA NOT DELETED") </script>';
    }
   // mysqli_close($conn);
}
?>