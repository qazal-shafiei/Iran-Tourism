<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "iran_tourism";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
        echo('امکان اتصال به پایگاه داده وجود ندارد');
      }
?>