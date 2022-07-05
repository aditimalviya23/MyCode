<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){


$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$passkey = $_POST['password'] ;
$cpasskey = $_POST['cpassword'];
$address = $_POST['address'];
$phonenum = $_POST['pnum'];
$city = $_POST['city'];
$state = $_POST['state'];

$emailquery = " SELECT * FROM user WHERE Email = '$email';";

$query = mysqli_query($conn, $emailquery);

$emailcount = mysqli_num_rows($query);
 
 if ($emailcount>0) {
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Warning!</strong> This email is already registered with us, please try with another email!
           </div>';
    
 }
 else{

   if ($passkey === $cpasskey) {

   
   $sql ="INSERT INTO `user` (`First_Name`,`Last_Name`,`Email`, `Password`, `Address`,`Phone_Number`, `City`, `State`) VALUES ('$firstname','$lastname','$email', '$passkey' ,'$address','$phonenum', '$city', '$state');";

   $result = mysqli_query($conn , $sql);

   if($result){
   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully! You can login now
          
        </div>';

    header('location: login.php');
   }
   else{
   echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry was not submitted successfully! We regret the inconvinience caused!
         
        </div>' . mysqli_error($conn);
    }
  
  }

   else{
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> Password does not match!
        </div>';
    }
  }

} 

/* $sqli = "SELECT City FROM user WHERE Email = '$email';";
   $resulti = mysqli_query($conn, $sqli);
   $rowi = mysqli_fetch_assoc($resulti);*/

?>