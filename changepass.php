 <?php

 session_start();

 require_once "config.php";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

 $email = $_POST['email'];
 $pass = $_POST['password'];
 $newpass = $_POST['newpassword'];

 $sql = "SELECT * FROM user WHERE Email = '$email' && Password ='$pass' "; 

 $result = mysqli_query($conn, $sql);  

 $num = mysqli_num_rows($result);

 if($num == 1){

   $sql = "UPDATE `user` SET `Password` = '$newpass' WHERE `user`.`Email` = '$email';";

   $result1 = mysqli_query($conn, $sql);

   //$num1 = mysqli_num_rows($result1);

   if($result1){

   echo "your password is changed";
   header('location: welcome.php');
   }
 }

else {   
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> Wrong Password or Email!
        </div>';

}

 
}

?>
 <!DOCTYPE html>
<html>
<head>

 <meta charset="utf-8">
  <title>Login form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="main.css">
    
<style>

.alert {
  position: relative;
  padding: 1rem 1rem;
  margin-bottom: 0rem;
  border: 1px solid transparent;
  border-radius: .25rem;
}

#cpassimg{
  background-image: url(https://img.freepik.com/free-photo/friends-having-fun-their-reunion_23-2149215764.jpg?t=st=1656741454~exp=1656742054~hmac=03a49d10388ae01eb612c0a7a149df2894f9dc3b4f394b7efd9e45cf1589af7b&w=900);
  background-size: cover;
  background-repeat: no-repeat;
}
  .row {
  --bs-gutter-x: 0rem;
  --bs-gutter-y: 0;
}
  .cpassmaindiv{

  background-color: white;
  height: 750px;

}
#cpassformbox{
  height: 750px;
}
</style>    
   
</head>
<body>

<div class="cpassmaindiv">
    <div class="row">
      <div class="col-lg-8" id="cpassimg"></div>
      <div class="col-lg-4" id="cpassformbox" style="height: 750px;">
<div style="background-color: #4d4d33; color: white; padding: 60px; height: 750px; " >
 <form action="" method="POST">
  <div class="mb-3 mt-3">
    <h1 style="text-align: center;">Change your password!</h1><br><hr>
  </div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Password</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label"> New Password</label>
    <input type="password" class="form-control" id="npwd" placeholder="Enter password" name="newpassword">
  </div>
  <a href="welcome.php" ><button type="submit" class="btn btn-primary">Submit</button></a>
</form> 
</div>
</div>
</div>
</div>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>