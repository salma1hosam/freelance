<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>CV</title>
    <link rel="stylesheet" href="../css/cv.css">
    <link rel="stylesheet" href="../css/client.css">
</head>
<body>
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
            </head>
            <body>
            
            <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              
              <a href="../html/freelanceaccount.php">My Account</a>
              <a href="../html/wall.php">Posts</a>
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
<header>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo"> Freelance</h2>
            </div>
            <div class="menu">
                <ul>
                 <li><a href="../html/home.php">Home</a></li>
                 <li><a href="../html/wall.php">posts page</a></li>
                 <li><a href="../html/sign.php">Sign up</a></li>
                 
                
               </ul>
            </div>
              
            <div class="search">
                <input  class = "srch" type="search"  placeholder="Type to text" >
                <a href="#"><button class="btn">Search</button></a>
           </div>
       </div>
</header>
<main style="inset-block:inherit;">
    <form method="post" name="SIGN_IN" class ="cv" action="CV.php" > 
    <label id="name">Name </label>
    <input type="text" id="name" minlength="3" maxlength="15" class="name" name="name" required><br>
    <label id="Graduation_Year">Graduation Year</label>
    <input type="number" id="Graduation_Year" class="Graduation_Year" name="graduationYear"placeholder="Enter Your GY"  max="2040" min="1990" class="Graduation_Year" required><br>
    <label id="University">University/collage </label>
    <input type="text" id="University"class="University" name="university" minlength="3"  maxlength="150" placeholder="Write the name of the university you graduated from with the of collage"required><br>
    <label id="Experience"> Experience</label>
    <input type="text" id="Experience" class="Experience" name="experience" placeholder="what's your Experience"  minlength="3" maxlength="250"required ><br>
  <div>
    <label id="tel">mob_number</label>
    <input type="tel" id="tel"  class="tel"placeholder="Enter your number" name="tel" style=" margin-right: 50px ;margin-top: 50px;" max="15" min="11"><br>
<label for="country" class="coun">Choose your country:</label>

<select name="country" id="country" class="country" name="country" required>
  <option value="volvo">USA</option>
  <option value="Canada">Canada</option>
  <option value="Australia">Australia</option>
  <option value="Germany">Germany</option>
  <option value="Colombia">Colombia</option>
  <option value="Argentina">Argentina</option>
  <option value="France">France</option>
  <option value="Brazil">Brazil</option>
  <option value="Chile">Chile</option>
  <option value="Cameroon">Cameroon</option>
  <option value="Afghanistan">Afghanistan</option>
  <option value="Angola">Angola</option>
  <option value="Japan">Japan</option>
  <option value="Denmark">Denmark</option>
  <option value="Burkina Faso">Burkina Faso</option>
  <option value="Bahrin">Bahrin</option>
  <option value="Egypt" selected>Egypt</option>
  <option value="Chad">Chad</option>
  <option value="saudi Arabia">saudi Arabia</option>
  <option value="India">India</option>
  <option value="Algeria">Algeria</option>
  <option value="Comoros">Comoros</option>
  <option value="Kuwait">Kuwait</option>
  <option value="Sudan">Sudan</option>
  <option value="Iraq">Iraq</option>
  <option value="Syria">Syria</option>
  <option value="Palestine">Palestine</option>

</select><br>

 
   
    <label id="email" class="e_mail">e_mail</label>
    <input type="email" id="email" class="email" placeholder name="e_mail" style=" margin-right: 50px ;margin-top: 50px;"required> <br>
  
    <label id="password">password</label>
    <input type="password" id="password" class="password" name="password" placeholder style=" margin-right: 50px ;margin-top: 50px;" required><br>
</div>
   
    <input type="submit" value="SUBMIT" class="Submit"  name="submit"placeholder  style=" margin-right: 50px ;margin-top: 50px; padding: 10px; padding-left: 20px; padding-right: 20px;" href="../html/wall.php">
    

</form>
<?php
 $servername='localhost';
 $username='root';
 $password='';
 $dbName='project';
 $conn=mysqli_connect($servername,$username,$password,$dbName);
 if(!$conn){
     die('there is aproblem in connection...'.mysqli_connect_error());
 }
 mysqli_select_db($conn,'project');
if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $university=$_POST['university'];
    $experience=$_POST['experience'];
    $tel=$_POST['tel'];
    $country=$_POST['country'];
    $e_mail=$_POST['e_mail'];
    $password=$_POST['password'];
    $graduationYear= $_POST['graduationYear']; 
$sql="INSERT INTO cv(nname,graduationYear,university,experience,tel,country,e_mail,pass) Values ('$name','$graduationYear','$university','$experience','$tel','$country','$e_mail','$password')";
     $result= mysqli_query($conn,$sql);
     if(!$result){
         echo "There is a problem in insert new REC".mysqli_error($conn);
         exit();
     }else{
         echo"inserting NEW REC is Done ";
     }
}

 ?>





<div class="text">CV</div>
</main>

</body>
</html>