<?php 
session_start();
$mysqli = new mysqli("localhost", "abood", "abood123", "mydb");

$sql = "delete from cart where typeid='".$_GET['pet']."' and user_iduser='".$_SESSION['id']."'";
$result = mysqli_query($mysqli,$sql);
header("Location:cart1.php");
?>