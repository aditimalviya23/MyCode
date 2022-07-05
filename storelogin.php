<?php

 session_start();

 require_once "config.php";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

 $email = $_POST['email'];
 $pass = $_POST['password'];

 $sql = "SELECT * FROM user WHERE Email = '$email' && Password ='$pass' "; 

 $result = mysqli_query($conn, $sql);

 $num = mysqli_num_rows($result);

 if($num == 1){

   $_SESSION['email'] = $email;
   header('location: welcome.php');

 }

else{
   echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> Password does not match!
        </div>';
  header('location: login.php');

}

 
}

?>