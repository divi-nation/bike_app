<?php session_start();
 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!isset($_SESSION['id']) || $_SESSION['id'] == null){
    header("Location: index.html");
}



else{
//querying the users table for the biking count
    $user_id =  $_SESSION['id'];
    $conn = mysqli_connect("localhost", "root", "", "bike_app"); 

    $query = "select * from users where id = '$user_id'";
    $result = mysqli_query($conn, $query) or die ("Unsuccessful Query");
    $row = mysqli_fetch_array($result);

    if (isset($_POST['submit'])){
        $first_name    = $_POST['first_name'];
        $business_name = $_POST['business_name'];
        $last_name     = $_POST['last_name'];
        $phone         = $_POST['phone'];
        $password      = $_POST['password'];
        $country       = $_POST['country'];

        if ($first_name != null){
            $query  = "update users set `first_name` = '$first_name' where id = $user_id";
            $result = mysqli_query($conn, $query) or die ("Unsuccessful Query");
            echo "<script>alert('First Name Updated')</script>";
          }
         if ($last_name != null){
            $query  = "update users set `last_name` = '$last_name' where id = $user_id";
            $result = mysqli_query($conn, $query) or die ("Unsuccessful Query");
            echo "<script>alert('Last Name Updated')</script>";

         }
         if ($business_name != null){
            $query  = "update users set `business_name` = '$business_name' where id = $user_id";
            $result = mysqli_query($conn, $query) or die ("Unsuccessful Query");
            echo "<script>alert('Business Name Updated')</script>";

         }
         if ($country != null){
            $query  = "update users set `country` = '$country' where id = $user_id";
            $result = mysqli_query($conn, $query) or die ("Unsuccessful Query");
            echo "<script>alert('Country Updated')</script>";

         }
         if ($phone != null){
            $query  = "update users set `phone` = '$phone' where id = $user_id";
            $result = mysqli_query($conn, $query) or die ("Unsuccessful Query");
            echo "<script>alert('Phone Number Updated')</script>";

         }
         if ($password != null){
            $query  = "update users set `password` = '$password' where id = $user_id";
            $result = mysqli_query($conn, $query) or die ("Unsuccessful Query");
            echo "<script>alert('Password Updated')</script>";

         }

         header("refresh:1; url=../profile.php");


         



    }
    

 
}