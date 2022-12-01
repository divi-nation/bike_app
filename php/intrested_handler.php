<?php require_once "session.php";


ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

//intrested user id = current user id
$int_user_id = $user_id;
$int_poster_id = $poster_id;
$int_item_id = $count;

$query = "insert into intrested (`int_user_id`,`int_poster_id`,`int_item_id`) values ('$int_user_id', '$int_poster_id', '$int_item_id')";
$execute = mysqli_query($conn, $query) or die ("unsuccessfull query");

if($conn){
    echo "<script>alert('Ping Sent');</script>";
}
else{
    echo "<script>alert('Something Went Wrong');</script>";
}

header("Location: ../bikeThrough.php");


 