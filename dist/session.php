<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "", "iran_tourism");
// Selecting Database
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=$connection->query("select userName from users where userName='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['userName'];
if(!isset($login_session)){
mysqli_close($connection);
header('Location: login.php'); // Redirecting To Home Page
}
?>