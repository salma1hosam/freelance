<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * From users Where user_name='{$_POST['user_name']}' AND  user_type='Client'";


//$sql = "SELECT pf_image,f_name,l_name,phone,email,pass,cpass,snn FROM users WHERE user_type='Client'";

 
$result = $conn->query($sql);

 if ($result->num_rows > 0) { 
    

    ?>
<head>
<link rel="stylesheet" href="../css/sign up.css">
     <link rel="stylesheet" href="../css/Admin.css">
</head>
<body>
<header class="head">
     <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo"> Freelance</h2>
            </div>
            <div class="menu">
                <ul>
                 <li><a href="../html/home.php">Home</a></li>
                 <li><a href="../html/sign.php">Sign up</a></li>
                 
                
               </ul>
            </div>
 </header>
<br>
<br>
  <table class="data" style="width: 100%; background-color: wheat;text-align:center">
        <tr class="table">
          <th>fname</th>
          <th>lname</th>
          <th>Email</th>
          <th>Telephone<th>
          <th>Password</th>
          <th>SNN</th>
          <th>Action </th>
         
          
           
        </tr>
        
    
        <?php 
            
            while($row = $result->fetch_assoc()) { 
                ?>
                <?php
            $url = $row['pf_image'];
                echo '<img class="rounded-circle mt-5" width="180px" alt="your photo" src="'.$url.'" />' 
            ?>
            <tr style="width: 100%; ">
               <td><?php echo  $row["f_name"] ?> </td>
               <td><?php echo  $row["l_name"] ?> </td>
               <td><?php echo  $row["email"] ?> </td>
               <td><?php echo  $row["phone"] ?> </td>
               <td><?php echo  $row["pass"] ?> </td>
               <td></td>
               <td><?php echo  $row["snn"] ?> </td>
               <td><a href="../html/update.php"><button name ="update" ><i class="fas fa-user-slash"></i> change password</button></a></td>   
            </tr>


     
        <?php } ?>
    </table>
    

</main>
</body>
</html>


      
<?php
 }
else
{
	header("location:sign.php");
}
?>