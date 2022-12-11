<!DOCTYPE html>
<html lang="en">

<head>

    <title>freelance.com</title>
    <link rel="stylesheet" href="../css/login.css">
    <script>
        var arr = (window.location.href).split("?");
        var error = arr[arr.length - 1];
        if (error == "connection-failed"){
            alert("Please enter correct data or Signup");
        }
    </script>

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
                    <li><a href="#">Profile</a></li>
                    <li><a href="../html/sign.php">Sign up</a></li>

                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name "" placeholder="Type to text">
                <a href="#"><button class="btn">Search</button></a>
            </div>
        </div>
        <div class="content">
            <h1>welcome &<br><span>freelancers</span> <br>let's go </h1>
            <p class="par">Best Benefits of Freelancing Jobs You Must Know Before You Starting
                Read More <br>Know your industry : Read, research and follow <br> the updates and news about the industry that you work in. <br> This will help you get quality work and keeps you in tune of the content you churn out <br>
                Have a clear picture of your basic monthly expenses to know <br>the minimum you need to bring in and more.</p> <br> <br>

            <button class="cn"> <a href="wall.php">See Posts</a></button>


            <div class="form">

                <form method="POST" action="../include/config.php">
                    
                    <h2>login here</h2>
                    <input type="text" name="email" placeholder="enter email here" required>
                    <input type="password" name="pass" placeholder="enter password here" required>
                    <select name="type" class="custom-select">
                    <option selected disabled value="0">Select Your Type:</option>
                    <option value="admin">Admin</option>  
                    <option value="Client">Client</option>
                    <option value="freelancer">freelancer</option>
             
                  </select>          

                    <button class="btnn" name="submit" type="submit"> login  </a> </button>
 

                </form>


                <p class="link">don't have an aacount <br>
                    <a href="sign.php">sign up </a>here </a>
                </p>
                <p class="liw">log in with </p>

                <div class="icons">
                    <a href="#">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-google"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-skype"></ion-icon>
                    </a>
                </div>


            </div>


        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>