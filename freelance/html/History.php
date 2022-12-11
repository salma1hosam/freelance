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
        <p >History Posts</p>
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
    $client_name = isset($_POST['client_name']) ? $_POST['client_name'] : ""; 
}
$sql = "SELECT project_name, describtion FROM form where d_project='{$_POST['client_name']}'";

 $result = $conn->query($sql);

// if ($result->num_rows > 0) { 
    

    ?>
    <br>
    <br>
  <table class="data" style="width: 100%; background-color: wheat">
        <tr class="table">
          <th>project_name</th>
          <th>describtion</th>           
        </tr>
        <?php 
            
            while($row = $result->fetch_assoc()) { 
                ?>
            <tr style="width: 100%; ">
               <td><?php echo  $row["project_name"] ?> </td>
               <td><?php echo  $row["describtion"] ?> </td>
               

                
            </tr>


     
        <?php } ?>
    </table>
    

</main>
</body>
</html>