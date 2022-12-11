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
                 <li><a href="../html/home.php">Home</a></li>
                 <li><a href="../html/sign.php">Sign up</a></li>
                
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
        <p >Proposals</p>
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
if(isset($_POST['save'])){
   // $freelance_name = isset($_POST['client_name']) ? $_POST['client_name'] : ""; 
}

$sql = "SELECT nname,university,experience,tel,country,e_mail,graduationYear FROM cv where nname='kalooba'";

 
$result = $conn->query($sql);

// if ($result->num_rows > 0) { 
    

    ?>


<br>
<br>
  <table class="data" style="width: 100%; background-color: wheat">
        <tr class="table">
          <th>name</th>
          <th>university</th>
          <th>experience</th>
          <th></th>
          <th>Telephone<th>
          <th>Country</th>
          <th>E-mail</th>
          <th>graduation year</th>
          <th>Action </th>
          
         
          
           
        </tr>
        
    
        <?php 
            
            while($row = $result->fetch_assoc()) { 
                ?>
            <tr style="width: 100%; ">
               <td><?php echo  $row["nname"] ?> </td>
               <td><?php echo  $row["university"] ?> </td>
               <td><?php echo  $row["experience"] ?> </td>
               <td><?php echo  $row["tel"] ?> </td>
               <td><?php echo  $row["country"] ?> </td>
               <td></td>
               <td></td>
               <td><?php echo  $row["e_mail"] ?> </td>
               <td><?php echo  $row["graduationYear"] ?> </td>
               <td><a href="../include/propDelet.php"><button name ="delete" ><i class="fas fa-user-slash"></i> Accept</button></a></td>
               
                
            </tr>


     
        <?php } ?>
    </table>
    

</main>
</body>
</html>