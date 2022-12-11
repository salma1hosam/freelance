<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("ERROR: Could not connect. " . $conn->connect_error);
}

// Taking all 2 values from the form data(input)
if(isset($_POST['save'])){
$d_project = isset($_POST['Client_name']) ? $_POST['Client_name'] : ""; 
$project_name = isset($_POST['project_name']) ? $_POST['project_name'] : "";
$describtion = isset($_POST['describtion']) ? $_POST['describtion'] : "";

echo $project_name;
$sql = "INSERT INTO form (project_name,describtion,d_project) VALUES ('$project_name','$describtion','$d_project')";

$result = mysqli_query($conn, $sql);
if($result){
    header("Location:../html/wall.php");
} else{
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($conn);
}
  

mysqli_close($conn);
}
?>







