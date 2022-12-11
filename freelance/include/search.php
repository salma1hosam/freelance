<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","project");
if(count($_POST)>0) {
$roll_no=$_POST['project_name'];
$result = mysqli_query($conn,"SELECT * FROM form where project_name LIKE '%$roll_no%' ");
}
?>
<!DOCTYPE html>
<html>
<head>
<title> Retrive data</title>
<style>
.body{
   width: 100%;
    background: linear-gradient(to top , rgba(0,0,0,0.5)50%, rgba(0,0,0,0.5)50%), url("../image/OIP.jpg") ; 
    background-position: center;  
    background-size: cover;
    height: 109vh;
    background-repeat: no-repeat;
}
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body class="body">
   <center><h3 >Result of Search</h3></center>
   <center>
<table>
<tr>
<td>project Name</td>
<td>Description</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["project_name"]; ?></td>
<td><?php echo $row["describtion"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
</center>
</body>
</html>