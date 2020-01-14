<?php
echo $_POST['id'];
session_start();
$mysqli = new mysqli("localhost", "abood", "abood123", "mydb");
$sql = "select typename,price,img,category_id from type where idtype ='" . $_POST['id'] . "'";
$result = $mysqli->query($sql);

while ($row = $result->fetch_assoc()) {
   $z = "INSERT INTO cart (quantity,user_iduser,typeid)
       VALUES (1, '" . $_SESSION['id'] . "' , '" . $_POST['id'] . "')";
   $y = mysqli_query($mysqli, $z);
   echo $row['category_id'];
   header("Location:itams.php?category=" . $row['category_id'] . " ");
}
