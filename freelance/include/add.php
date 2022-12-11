<?php
include 'conn.php';
$name=$_POST['name'];
$university=$_POST['university'];
$experience=$_POST['experience'];
$tel=$_POST['tel'];
$country=$_POST['country'];
$e_mail=$_POST['e_mail'];
$password=$_POST['password'];
$graduationYear= $_POST['graduationYear']; 
$sql="INSERT INTO cv(name,graduationYear,university,experience,tel,country,e_mail,password) Values ('$name','$graduationYear','$university','$experience','$tel','$country','$e_mail','$password')";

mysqli_query($conn , $sql);
header("location: ../test/login.php?sign=success");
?>