<?php

include "dbconfig.php";

if(isset($_POST['submit'])){
  $email=$_POST['email'];
  $password=$_POST['password'];

  $sql="select * from user_login where email='$email' and password='$password'";
  $result=$con->query($sql);
  if($result->num_rows>0){
    $data=$result->fetch_assoc();
    session_start();
    $_SESSION['email']=$data['email'];
    $_SESSION['id']=$data['id'];
    header("location:user_home.php");
  }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple HTML Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form name="contactForm"  action="" method="post">
    <h2>LOGIN HERE</h2>
    
    <div class="row">
        <label>Email Address</label>
        <input type="text" name="email">

    </div>
    <div class="row">
        <label>password</label>
        <input type="text" name="password">
    
    </div>
  
    <div class="row">
        <input type="submit" value="Submit">
    </div>
</form>
</body>
</html>
