<html lang="en">
<head>
<title> freelance </title>
<link rel="stylesheet" href="../css/wall.css">
<link rel="stylesheet" href="../css/login.css">

</head>
<body background="../img/1.jpg">
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h1 class="logo"> Freelance</h1>
            </div>
            <div class="menu">
                <ul>
                    <br>
                 <li><a href="../html/home.php">Home</a></li></br>
                 <li><a href="../html/sign.php">Sign up</a></li>
                 
                
               </ul>
            </div>
              
            <div class="search">
              <form action="../html/index1.php">
                <!-- <input  class = "srch" type="search" name "" placeholder="Type to text" > -->
                <button class="btn" name="search">Search</button>
                </form>
           </div>
       </div>
        <main> 
       <style>
        body {
          font-family: "Lato", sans-serif;
        }
        
        .sidenav {
          height: 100%;
          width: 0;
          position: fixed;
          z-index: 1;
          top: 0;
          left: 0;
          background-color: black;
          overflow-x: hidden;
          transition: 0.5s;
          padding-top: 60px;
          background-position: right;
    
        }
        
        .sidenav a {
          padding: 70px 8px 8px 32px;
          text-decoration:none;
          font-size: 25px;
          color: #ff7200;
          display: block;
          transition: 0.3s;
        }
        
        .sidenav a:hover {
          color: #f1f1f1;
        }
        
        .sidenav .closebtn {
          position: absolute;
          top: 0;
          right: 25px;
          font-size: 36px;
          margin-left: 50px;
        }
        
        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }
        </style>
         
      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        
        <a href="../html/sign.php">My Account</a>
        <a href="#">freelancers</a>
        <form action="../controllers/LogoutController.php" method="post">
                <button type="submit" name="logout" class="button">Log out</button>
             </form>
      </div>
      
      <span style="font-size:30px;cursor:pointer " onclick="openNav()"class="span" >&#9776; </span>
      
      <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
      }
      
      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }
      </script>

       <form action="wall.php" method="post">
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

$sql = "SELECT * From form";

 
$result = $conn->query($sql);

if ($result->num_rows > 0) { 
    
    ?>
<?php } ?>

<br>
<br>
  <table class="data" style="width: 100%; background-color: wheat ">
  <?php 
            
while($row = $result->fetch_assoc())  {
                ?>
            <tr style="width: 70%; ">
            <tr class="table">
          <tr >
          <th><p class="outset"> <td><?php echo  $row["project_name"] ?><br></td></p>
          <form action="../html/propacou.php"><button type="submit" name="save" class="sub">Send request</button></th></form>
        </tr>
          <th><p class="inset"> <td><?php echo  $row["describtion"] ?> </td></p></th>
          <!-- <button class="sub">Send request</button> -->
          
        </tr>
  
     
            <?php } ?>
      </table>
    </form>         
            </main>

    </body>
</html>