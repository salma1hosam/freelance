<!DOCTYPE html>
<html lang="en">
<head >

    <title>freelance.com</title>
  
    <link rel="stylesheet" href="../css/client.css">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body class="background">
  
<header class="header">
   
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
           
            <div class="h2">
            <h2>Tell us what you need done</h2>
            <h4>Contact skilled freelancers within minutes. View profiles, ratings, portfolios and chat with them.</h4>
              <h4> Pay the freelancer only when you are 100% satisfied with their work.</h4>
</div>
   
</header>   
   
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
            </head>
            <body>
            
            <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="../html/myacoount.php">My Account</a>
              <a href="../html/Historyacount.php">My History</a>
              <a href="../html/freeprop.php">Proposals</a>
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
   
  
    
    <form class="action"  action="../include/connection.php" method= "POST">
    <label class="title"><h3>User Name</h3></label><br><br>
    <input type="text" class="typing"name="Client_name" placeholder="Enter The username" >
      <label class="title"><h3>Choose a name for your project</h3></label><br><br>
    <input type="text" class="typing"name="project_name" placeholder="Enter The Name Of Your Project" >
     <h3 class="title" > Tell us more about your project</h3>
     <textarea type="textarea" class="text" name="describtion" placeholder = "Describe your project here..."  >

     </textarea>

     <!--<input type="file" id="upload" name="upload" class ="upload"placeholder="upload file" >-->

     <input type="submit" id="save" class="sub" name="save" value="submit">
 
        </form>
        

      </main>
      
</body>
</html>

