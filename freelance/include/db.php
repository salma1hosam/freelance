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
?>