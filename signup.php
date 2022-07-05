<?php

require_once "config.php";

include "storedata.php";

?>

<!DOCTYPE html>
<html>
<head>

 <meta charset="utf-8">
  <title>Registration form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="main.css">

    <style >

body{
  background-color: #604020;
}      
      .formerror{
      color: #ff4d4f;
    }
      .alert {
  position: relative;
  padding: 1rem 1rem;
  margin-bottom: 0rem;
  border: 1px solid transparent;
  border-radius: .25rem;
}
     
     #regmaindiv{
  background-image: url(https://img.freepik.com/free-photo/friends-forever-two-cute-lovely-girl-friends-sunglasses-posing-with-smile-isolated-blue-wall_231208-11835.jpg?t=st=1656587844~exp=1656588444~hmac=483378dccdbd4430d09087c525c7699ab6e57c6161070713d82b30846b3e70db&w=900);
  background-size: cover;
  background-repeat: no-repeat;
  height: 770px;
}
#regform {
  background-color: #604020;
  color: white;
  margin-top: 0px;
  position: relative;
  padding: 60px;
  height: 770px;
}
a{
    color: white;
    text-decoration: none;
}
a:hover {
  color: #fd4848;
}
    </style>

   
</head>
<body>

  <div id="regmaindiv">
    
      <div class="row">
        <div class="col-lg-5" id="regformbox">       
          
  <div style="color: white;" class="container" id="regform">
    <div class="row">
      
         <h1 class="regh1">JOIN US!</h1><br>

  <form action="" name="myForm" onsubmit="return validateForm()" class="row g-3" method="post">

  <div class="col-md-6" id="fn" class="">
    <label  class="form-label">First Name</label>
    <input type="text" class="form-control"  name="fname" placeholder="Enter your first name" required>
    <b><span class="formerror"></span></b>
  </div>
  <div class="col-md-6" id="ln" class="">
    <label  class="form-label">Last Name</label>
    <input type="text" class="form-control"  name="lname" placeholder="Enter your last name" required><span class="formerror"></span>
  </div>
  <div class="col-md-12" id="em" class="">
    <label  class="form-label">Email</label>
    <input type="text" class="form-control" id="inputEmail4" name="email" placeholder="Enter your email id " required ><b><span class="formerror"></span></b>
  </div>
  <div class="col-md-6" id="pass" class="">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="******"  required><b><span class="formerror"></span></b>
  </div>
  <div class="col-md-6" id="cpass" class="">
    <label  class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="cpassword" placeholder="******" required><span class="formerror"></span>
  </div>
  <div class="col-12" id="addr" class="">
    <label  class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Address" name="address"  ><span class="formerror"></span>
  </div>
  <div class="col-md-4" id="pn" class="">
    <label  class="form-label">Phone Number</label>
    <input type="Number" class="form-control" id="inputCity" name="pnum" placeholder="+91" ><b><span class="formerror" required></span></b>
  </div>
  <div class="col-md-4" id="ct" class="">
    <label  class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity" name="city" placeholder="City" ><span class="formerror"></span>
  </div>
  <div class="col-md-4" id="st" class="">
    <label  class="form-label">State</label>
    <select id="inputState" class="form-select" name="state">
      <option selected>State</option>
      <option>Assam</option>
      <option>Bihar</option>
      <option>Gujrat</option>
      <option>Haryana</option>
      <option>Madhya Pradesh</option>
    </select>
    <span class="formerror"></span>
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Signup</button><a href="login.php"> LOGIN</a>
  </div>

</form>
      
    </div>


  </div>

</div>
</div>

  </div>
</div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

<script>
  function clearErrors(){
    err = document.getElementsByClassName('formerror');
    for(let item of err)
    {
      item.innerHTML = "";
    }
  }
  
  function seterror(id, error){

    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;

  } 
  function validateForm(){

      var returnval = true;
      clearErrors();

      var email = document.forms['myForm']['email'].value;
      if (email.length>50) {
        seterror("em","* Email Id is too long");
        returnval = false;
      }

      var pnum = document.forms['myForm']['pnum'].value;
      if (pnum.length!=10) {
        seterror("pn","* Not valid Number");
        returnval = false;
      }
       var pass = document.forms['myForm']['password'].value;
      if (pass.length<5) {
        seterror("pass","* Password Too short");
        returnval = false;
      }
      return returnval;
  }

</script>

</html>