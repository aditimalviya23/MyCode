<?php

session_start();

if ($_SESSION['loggedin']!= true) {
    header('location: login.php');
    exit;
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <title>Profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="main.css">
    
<style>

#data{
    background-color: #400080;
    height: 760px;
    padding: 40px;
    color: white;
    text-align: center;
}
    .profilediv1{
    
    text-align: left;
    height: 800px;
}
    #profileimg{
        background-image: url(https://img.freepik.com/free-photo/happy-authentic-girl-smiling-pointing-fingers-sideways-showing-left-right-banner-demonstrating-p_1258-88201.jpg?t=st=1656763085~exp=1656763685~hmac=aa04eb31f5eb0a11eda4bb8deeff880fc01de6675514be02912da7b0cd7412d5&w=900);
    background-size: cover;
    background-repeat: no-repeat;
    }
#sidenavbar{
    background-color: #400080 ;
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

    <div class="profilediv1">
        <div class="row">
            <div class="col-md-4" id="data">
                <h1>Hello!
                    <?php 
                    print_r($_SESSION['username']);
                    
                    ?><br><br>
               </h1>
               <h5>Your address is: <?php print_r($_SESSION['useradd'].' , '.$_SESSION['usercity'].' , '.$_SESSION['userstate']); ?> </h5>
               <h5>Your Phone Number is: <?php print_r($_SESSION['usernum']); ?> </h5>
               

      <br><br>
        <h2>Your Freinds are:<br></h2>
        <h5>
        <?php 
        require_once "userdatadisplay.php";
        $count = 0; 
        while ($row = mysqli_fetch_assoc($result)) 
        { 
            
          echo $row['First_Name']." ".$row['Last_Name'] ." Lives in ". $row['State'];
          echo "<br>";
        }
        ?>
        </h5>
        <br><br><br>        
    </div>
    <div class="col-md-7" id="profileimg">
        
    </div>
    <div class="col-md-1" id="sidenavbar" style="color: white; padding: 10px;" >
        <br>
        <br>
        <p>Home</p><hr>
        <p>Contact Us</p><hr>
        <p>About Us</p><hr>
        <p>Link</p><hr>
        <p><a href="changepass.php"> Change Pass</p><hr>
        <p><a href="logout.php"> Logout</p><hr>

    </div>
</div>

</body>
</html>
