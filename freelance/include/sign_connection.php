<?php
$servername='localhost';
$username='root';
$password='';
$dbName='project';
$conn=mysqli_connect($servername,$username,$password,$dbName);
if(!$conn){
    die('there is aproblem in connection...'.mysqli_connect_error());
}
if (isset($_POST['save'])){
   $fnamef=$_POST['fname'];
   $lname=$_POST['lname'];
   $tel=$_POST['tel'];
   $pass=$_POST['pass'];
   $cpass=$_POST['cpass'];
   $email=$_POST['email'];
   $type= $_POST['type'];
   $SNN= $_POST['SNN'];
   $user=$_POST['user_name'];;
    if ($_FILES['img']['tmp_name']) {
        $fname = ($_FILES['img']['name']);
        $tmpName  = $_FILES['img']['tmp_name'];

        $fp      = fopen($tmpName, 'r');
        $content = fread($fp, filesize($tmpName));
        $content = addslashes($content);
        fclose($fp);
    }
 $sql= "INSERT INTO users (user_name,f_name, l_name,phone,pass,cpass,email,snn,user_type,pf_image) VALUES ('$user','$fnamef','$lname','$tel','$pass','$cpass',' $email','$SNN','$type','$content')";

$result= mysqli_query($conn,$sql);
     if($type == "Client"){
         header("Location: ../html/client.php"); 
       
     }else{
        header("Location:../html/Freelancers.php");
     }
}
 ?>

  
        <!-- $sql = $conn->query($sql); -->

