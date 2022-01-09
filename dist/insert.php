<?php
include_once 'db.php';
if(isset($_POST['submit']))
{
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $username = $_POST['userName'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $sql = "INSERT INTO users (firstName,lastName,userName,password)
     VALUES ('$firstname','$lastname','$username','$password')";
    if ($confirmPassword == $password) {
        if (mysqli_query($conn, $sql)) {
            header("Location: /login.php?success=1");
            die();
        } else {
            header("Location: /register.php?success=0");
            die();
        }
    } else {
        header("Location: /register.php?confirmPassword=0");
            die();
    }
    
    mysqli_close($conn);
}
?>