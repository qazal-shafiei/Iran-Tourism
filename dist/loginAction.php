<?php
session_start();
$error='';
if (empty($_POST['username']) || empty($_POST['password'])) {
header("Location: /login.php?emptyFeild=1");
  die();
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];
$connection = mysqli_connect("localhost", "root", "", "iran_tourism");
$query = $connection->query("select * from users where password='$password' AND userName='$username'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username;
// die($_SESSION['login_user']);
header("location: index.php");
// die($_SESSION['login_user']);
} else {
  header("Location: /login.php?success=0");
  die();
}
mysqli_close($connection);
}
?>