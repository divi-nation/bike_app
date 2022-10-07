<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);





   $business_name = $_POST['business_name'];
   $email = $_POST['email'];
   $password = $_POST['password'];

   $conn = new mysqli("localhost", "root", "", "bike_app");

   $query = "select * from users where business_name = '$business_name' or email = '$business_name'";
   $result = mysqli_query($conn, $query) or die ("Unsuccessful Query");
   $row = mysqli_fetch_array($result);

   $user_password = $row['password'];

   echo $user_password;

   if($user_password == $password){
    echo "<script>alert('login sucessful')</script>";
    session_start();
    $_SESSION['id'] = $row['id'];
    header("refresh:1; url=../homepage.php");

    //pass session token


    
   }

   else{
    echo "<script>alert('login not sucessful, try again')</script>";
    header("refresh:1; url=../index.html");

   }
   

    