<?php session_start();
 
ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

if (!isset($_SESSION['id']) || $_SESSION['id'] == null){
    header("Location: index.html");
}

else{
//querying the users table for the biking count
    $user_id =  $_SESSION['id'];
    $conn = mysqli_connect("localhost", "root", "", "bike_app"); 

    $query  = "select * from users where id = '$user_id'";
    $result = mysqli_query($conn, $query) or die ("Unsuccessful Query");
    $row    = mysqli_fetch_array($result);

    

 
}