<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>freelance.com</title>
    <link rel="stylesheet" href="../css/sign.css">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
     <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo"> Freelance</h2>
            </div>
            <div class="menu">
                <ul>
                 <li><a href="../html/home.php">Home</a></li>
                 <li><a href="../html/Login.php">Log in</a></li>
                 
                
               </ul>
            </div>
              
            <div class="search">
                <input  class = "srch" type="search" name "" placeholder="Type to text" >
                <a href="#"><button class="btn">Search</button></a>
           </div>
       </div>
       </div> 

<h2 class="connect">Signup </h2>
       <div class="sign_up">
        <form class="sign" action="../include/sign_connection.php" method="post" enctype="multipart/form-data">
          
        <label for="username">user name </label><br><br>
          <input name="user_name" id="username" type="text" placeholder="enter your user name " required >  
        <label for="name">first name </label><br><br>
          <input name="fname" id="name" type="text" placeholder="enter your first name " required >
          <br>
          <label for="name">last name </label><br><br>
          <input name="lname" id="name" type="text" placeholder="enter your last name " required > <br>
      
          <label for="tel">telephone</label><br><br>
          <input name="tel" id="tel" type="tel" placeholder="enter your telephone" required > <br>
          <br>
          <label for="name">Choose Your Type </label>
          <br>
     
            <select name="type" class="custom-select">
              <option selected disabled value="0">Select Your Type:</option>
              <option value="Client">Client</option>
              <option value="freelancer">freelancer</option>
             
            </select>          
 
          <label id="em1" for="em">email</label><br><br>
          <input id="em2" name="email" type="email" placeholder="enter your email" required >
          <label id="pa" for="pa">passward</label><br><br>
          <input id="pa1" name="pass" type="password" placeholder="enter your passward" required > <br>
          <label  id="pa2" for="pa">ConfirmPassward</label><br><br>
          <input id="pa3" name="cpass" type="password" placeholder="enter Confirm passward" required >
          <label id = f1>enterYourSSN</label>
          <input id="file" name="SNN" type="text"  placeholder="enteryourSSN"><br>
          <!-- <input type="submit" id="save" class="sub" name="save" value="submit"> -->
          <label id = f2>enterYourImage</label>
            <input type="file" name="img"placeholder="enter your image">
          <button type="submit" name="save" id ="save">SUBMIT</a></button>
    
        </form>
      </div>
    
</body>
</html>