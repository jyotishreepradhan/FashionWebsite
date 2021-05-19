<?php
include "admin_home.php";
include "dbconfig.php";

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $price=$_POST['price'];
  $color=$_POST['color'];
  $type=$_POST['type'];
  $sleeve=$_POST['sleeve'];
  $sleeve_length=$_POST['sleeve_length'];
  
  $sql="insert into items values(0,'$name','$price','$color','$type','$sleeve','$sleeve_length')";
  if($con->query($sql)){
    ?>
    <script>
    alert("data inserted successfully");
    </script>
  <?php
  }
  else{
   ?>
    <script>
    alert("something wrong");
    </script>
   <?php
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>add product</title>
</head>
<body>
<h1>Add product here</h1>
  <form action="" method="post">
  <input type="text" name="name" id="" placeholder="product name">
  <input type="text" name="price" id="" placeholder="price">
  <input type="text" name="color" id="" placeholder="color">
  <input type="text" name="type" id="" placeholder="type">
  <input type="text" name="sleeve" id="" placeholder="sleeve">
  <input type="text" name="sleeve_length" id="" placeholder="sleeve length">
  <select name="size" id="">
    <option value="size">M</option>
    <option value="size">L</option>
    <option value="size">XL</option>
    <option value="size">XXL</option>
  </select>

  <input type="submit" value="Add product" name="submit">

  </form>
</body>
</html>