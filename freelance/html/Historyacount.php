<!DOCTYPE html>
<html lang="en">

<head>
  <title>Enter your username</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/sign.css">
</head>
<body class="body">
    <style>
        .body{
            width: 100%;
             background: linear-gradient(to top , rgba(0,0,0,0.5)50%, rgba(0,0,0,0.5)50%), url("../image/Going-freelance.jpeg ") ; 
             background-position: center;  
             background-size: cover;
             height: 109vh;
             background-repeat: no-repeat;
        }
    </style>
<div class="container">
  <form class="form-inline" method="post" action="../html/History.php">
    <input type="text" name="client_name" class="form-control" placeholder="enter the username">
    <button type="submit" name="save" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
</html>