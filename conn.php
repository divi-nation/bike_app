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

}
