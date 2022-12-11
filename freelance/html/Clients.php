<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>freelance.com</title>
     <!-- <link rel="stylesheet" href="../css/login.css">  -->
     <link rel="stylesheet" href="../css/sign up.css">
     <link rel="stylesheet" href="../css/Freelancers.css">
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
                 <li><a href="#">Home</a></li>
                 <li><a href="#">About</a></li>
                 <li><a href="#">Signup</a></li>
                 <li><a href="#">Service</a></li>
                
               </ul>
            </div>
              
            <div class="search">
                <input  class = "srch" type="search" name "" placeholder="Type to text" >
                <a href="#"><button class="btn">Search</button></a>
           </div>
       </div>
       </div>
</header> 
<main >
    <div class="freelancers">
        <p >There Is The Clients Data</p>
    </div>
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

$sql = "SELECT f_name,l_name,phone,email,pass,cpass,snn FROM users WHERE user_type='Client'";

 
$result = $conn->query($sql);

// if ($result->num_rows > 0) { 
    

    ?>


<br>
<br>
  <table class="data" style="width: 100%; background-color: wheat">
        <tr class="table">
          <th>fname</th>
          <th>lname</th>
          <th>email</th>
          <th></th>
          <th>Telephone<th>
          <th>Country</th>
          <th>E-mail</th>
          <th>Password</th>
          <th colspan="2" >Action </th>
         
          
           
        </tr>
        
    
        <?php 
            
            while($row = $result->fetch_assoc()) { 
                ?>
            <tr style="width: 100%; ">
               <td><?php echo  $row["f_name"] ?> </td>
               <td><?php echo  $row["l_name"] ?> </td>
               <td><?php echo  $row["email"] ?> </td>
               <td><?php echo  $row["phone"] ?> </td>
               <td><?php echo  $row["pass"] ?> </td>
               <td></td>
               <td><?php echo  $row["cpass"] ?> </td>
               <td><?php echo  $row["email"] ?> </td>
               <td><?php echo  $row["snn"] ?> </td>
               <td><a href="../include/delet.php"><button name ="delete" ><i class="fas fa-user-slash"></i> Delete</button></a></td>
               <td><a href="sign.php"><button name ="add" ><i class="fas fa-user-slash"></i> Add</button></a></td>
               
                
            </tr>


     
        <?php } ?>
    </table>
    

</main>
</body>
</html>