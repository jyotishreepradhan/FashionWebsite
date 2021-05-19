<?php
include "dbconfig.php";
include "admin_home.php";
$id=$_GET['id'];
if(isset($_POST['update'])){
  $name=$_POST['name'];
  $price=$_POST['price'];
  $color=$_POST['color'];
  $type=$_POST['type'];
  $sleeve=$_POST['sleeve'];
  $sleeve_length=$_POST['sleeve_length'];
  $sql="update items set name='$name',price='$price',color='$color',type='$type',sleeve='$sleeve',sleeve_length='$sleeve_length' where id=$id";
  if($con->query($sql)){
    header("location:view_product.php");
  }
  else{
    header("location:update.php");
  }
}

$qry="select * from items where id=$id";
$result=$con->query($qry);
if($result->num_rows>0){
  $data=$result->fetch_assoc();
  $name=$_POST['name'];
  $price=$_POST['price'];
  $color=$_POST['color'];
  $type=$_POST['type'];
  $sleeve=$_POST['sleeve'];
  $sleeve_length=$_POST['sleeve_length'];
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1>update form</h1>
  <form action="" method="post">
  <input type="text" name="name" value="<?php echo $name;?>" placeholder="enter name">
  <input type="text" name="price" value="<?php echo $price;?>" placeholder="enter price">
  <input type="text" name="color" value="<?php echo $color;?>" placeholder="enter color">
  <input type="text" name="type" value="<?php echo $type;?>" placeholder="enter type">
  <input type="text" name="sleeve" value="<?php echo $sleeve;?>" placeholder="enter sleeve">
  <input type="text" name="sleeve_length" value="<?php echo $sleeve_length;?>" placeholder="enter sleeve_length">
  <input type="submit" value="update" name="update">
  </form>
</body>
</html>