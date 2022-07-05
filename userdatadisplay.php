<?php 

   require_once "config.php";

   $sql ="SELECT * FROM user WHERE First_Name != '".$_SESSION['username']."'";
   $result = mysqli_query($conn, $sql);
   $num = mysqli_num_rows($result);
   $row = mysqli_fetch_assoc($result);

?>