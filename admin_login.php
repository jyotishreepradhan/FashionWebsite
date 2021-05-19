<?php

include "dbconfig.php";

if(isset($_POST['login'])){
  $username=$_POST['username'];
  $password=$_POST['password'];

  $sql="select * from admin where username='$username' and password='$password'";
  $result=$con->query($sql);
  if($result->num_rows>0){
    $data=$result->fetch_assoc();
    session_start();
    $_SESSION['username']=$data['username'];
    header("location:admin_home.php");
  }
}


?>