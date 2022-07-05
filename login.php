 <?php

 require_once "config.php";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

 $email = $_POST['email'];
 $pass = $_POST['password'];

 $sql = "SELECT * FROM user WHERE Email = '$email' && Password ='$pass' "; 

 $result = mysqli_query($conn, $sql);

 $num = mysqli_num_rows($result);

 if($num == 1){

   session_start();

   

   $_SESSION['loggedin'] = true;

   header('location: welcome.php');

   $sql = "SELECT First_Name FROM user WHERE Email = '$email';";
   $result = mysqli_query($conn , $sql);
   //$num = mysqli_num_rows($result);
   $row = mysqli_fetch_assoc($result);

   $_SESSION['username']= $row['First_Name'];

   $sql = "SELECT City FROM user WHERE Email = '$email';";
   $result = mysqli_query($conn , $sql);
   //$num = mysqli_num_rows($result);
   $row = mysqli_fetch_assoc($result);

    $_SESSION['usercity']= $row['City'];

   $sql = "SELECT Address FROM user WHERE Email = '$email';";
   $result = mysqli_query($conn , $sql);
   //$num = mysqli_num_rows($result);
   $row = mysqli_fetch_assoc($result);

   $_SESSION['useradd']= $row['Address'];


    $sql = "SELECT State FROM user WHERE Email = '$email';";
   $result = mysqli_query($conn , $sql);
   //$num = mysqli_num_rows($result);
   $row = mysqli_fetch_assoc($result);

   $_SESSION['userstate']= $row['State'];

   $sql = "SELECT Phone_Number FROM user WHERE Email = '$email';";
   $result = mysqli_query($conn , $sql);
   //$num = mysqli_num_rows($result);
   $row = mysqli_fetch_assoc($result);

   $_SESSION['usernum']= $row['Phone_Number'];
 }

else{
   echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> PLease check your Email and Password and try again!
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
    
   <style type="text/css">
     
element {
  background-color: darkslategrey;
  color: white;
  padding: 40px;
}
.alert {
  position: relative;
  padding: 1rem 1rem;
  margin-bottom: 0rem;
  border: 1px solid transparent;
  border-radius: .25rem;
}
body{
  background-color: darkslategrey;
}
   </style>

</head>
<body>

<div class="loginmaindiv">
    <div class="row">
      <div class="col-lg-8" id="loginimg"></div>
      <div class="col-lg-4" id="loginformbox" style="background-color: darkslategrey; color: white; padding: 60px;">

 <form action="" method="POST">
  <div class="mb-3 mt-3">
    <br><br><h1 style="text-align: center;">Login!</h1><br><hr>
  </div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Password</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
  </div>
  
  <a href="welcome.php" ><button type="submit" onclick="myFunction()" class="btn btn-primary">Submit</button></a>

  <div class="mb-3">
    <br><br></a><p>Friendship is one of the greatest bonds anyone can ever wish for. Lucky are those who have friends they can trust. Friendship is a devoted relationship between two individuals. They both feel immense care and love for each other. Usually, a friendship is shared by two people who have similar interests and feelings.</p>
  </div>
</form> 
</div>
</div>
</div>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>

  function myFunction(){
    document.getElementById("loginimg").style.backgroundImage = "url(https://img.freepik.com/free-photo/troubled-displeased-bearded-man-frowns-face-feels-sad-distressed-upset-being-bored-sitting-quarantine-unhappy-miss-good-chance-dressed-casually-isolated-yellow-wall_273609-37534.jpg?t=st=1656753666~exp=1656754266~hmac=497705e6e222d1a1c6b15505647bec0a2c9feeab08b8b8782b8b521d341df895&w=740)";
  }

</script>
</body>
</html>