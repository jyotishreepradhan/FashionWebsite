<?php
include "dbconfig.php";

$sql="select * from items ";
$result=$con->query($sql);
if($result->num_rows>0){
  $data=$result->fetch_assoc();
    $name=$data['name'];
    $price=$data['price'];
    $color=$data['color'];
    $type=$data['type'];
    $sleeve=$data['sleeve'];
    $sleeve_length=$data['sleeve_length'];
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
  <div >
<table border="1" width="100%" bgcolor="white">
  <tr class="women cloth">
<td colspan="5"></td>
  </tr>
  <tr>
    <th><img src="./IMAGE/e1.jpeg" width="120px"></th>
    <th><img src="./IMAGE/e2.jpeg" width="120px"></th>
    <th><img src="./IMAGE/e3.jpeg" width="120px"></th>
    <th><img src="./IMAGE/e4.jpeg" width="120px"></th>
</tr>
<tr>
   <th >Casual Full Sleeve Printed Women Silver Top</th>
    <th>Women Fit And Flare Skyblue Dress</th>
    <th>Casual Full Sleeve Printed Women Black Top</th>
    <th>Women Empire Waist Yellow Dress</th>
</tr>
<tr>
    <th>Price:<font color="">567/-</font></th>
    <th>Price:<font color="">900/-</font></th>
    <th>Price:<font color="">700/-</font></th>
    <th>Price:<font color="">845/-</font></th>
</tr>
<tr>
  <th><a href="#">SHOW MORE</a></th>
  <th><a href="#">SHOW MORE</a></th>
  <th><a href="#">SHOW MORE</a></th>
  <th><a href="#">SHOW MORE</a></th>
</tr>
<tr>
    <th><img src="./IMAGE/e5.jpeg" width="150px"></th>
    <th><img src="./IMAGE/e6.jpeg" width="150px"></th>
    <th><img src="./IMAGE/e7.jpeg" width="150px"></th>
    <th><img src="./IMAGE/e8.jpeg" width="160px"></th>
</tr>
<tr>
    <th>Women Printed Red Palazo</th>
    <th>Women Printed Green Palazo</th>
    <th>Women Sheath Black Dress</th>
    <th>Women Fit And Flare Black Dress</th>
</tr>
<tr>
    <th>Price:<font color="">1500/-</font></th>
    <th>Price:<font color="">1700/-</font></th>
    <th>Price:<font color="">950/-</font></th>
    <th>Price:<font color="">745/-</font></th>
</tr>

<tr>
  <th><a href="#">SHOW MORE</a></th>
  <th><a href="#">SHOW MORE</a></th>
  <th><a href="#">SHOW MORE</a></th>
  <th><a href="#">SHOW MORE</a></th>
</tr>

<tr>
    <th><img src="./IMAGE/e9.jpeg" width="90px"></th>
    <th><img src="./IMAGE/e10.jpeg" width="80px"></th>
    <th><img src="./IMAGE/e11.jpeg" width="70px"></th>
    <th><img src="./IMAGE/e12.jpeg" width="100px"></th>
  </tr>
<tr>
    <th>Women A-line Onepiece</th>
    <th>Women Western High Low Knee Long Onepiece</th>
    <th>Women A-line knee Length Kurti</th>
    <th>Women Embroidered Gown</th>
  </tr>
<tr>
    <th>Price:<font color="">650/-</font></th>
    <th>Price:<font color="">2000/-</font></th>
    <th>Price:<font color="">2000/-</font></th>
    <th>Price:<font color="">2000/-</font></th>
  </tr>
  <tr>
  <th><a href="#">SHOW MORE</a></th>
  <th><a href="#">SHOW MORE</a></th>
  <th><a href="#">SHOW MORE</a></th>
  <th><a href="#">SHOW MORE</a></th>
</tr>

</table>

</div>
</body>
</html>