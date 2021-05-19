<?php
include "dbconfig.php";
include "admin_home.php";
session_start();
if(isset($_SESSION['username'])){

echo "welcome $_SESSION[username]";
$sql="select * from items";
$result=$con->query($sql);
if($result->num_rows>0){

  echo "<table border=1 style='width:600px;margin:auto'>";
   echo "<tr><th>name</th>
        <th>price</th>
        <th>color</th>
        <th>type</th>
        <th>sleeve</th>
        <th>sleeve_length</th>
        </tr>";

  while($data=$result->fetch_assoc()){

    echo "<tr>
              <td>$data[name]</td>
              <td>$data[price]</td>
              <td>$data[color]</td>
              <td>$data[type]</td>
              <td>$data[sleeve]</td>
              <td>$data[sleeve_length]</td>
              <td><a href='update.php?id=$data[id]'>update</a>
              <a href='delete.php?id=$data[id]'>delete</a>
              </td>
    </tr>";
  }
}
else{
  echo "no data found";
}
}

?>
</table>