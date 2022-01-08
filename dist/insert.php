<?php
include_once 'db.php';
if(isset($_POST['submit']))
{
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $username = $_POST['userName'];
    $password = $_POST['password'];
    $sql = "INSERT INTO users (firstName,lastName,userName,password)
     VALUES ('$firstname','$lastname','$username','$password')";
    if (mysqli_query($conn, $sql)) {
        echo "New record has been added  !";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_connect_error();
    }
    mysqli_close($conn);
}
?>