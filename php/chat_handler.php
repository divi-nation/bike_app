<?php require_once "session.php";



$send = $_POST['message'];

if(isset($send)){
    $receiver_id = mysqli_real_escape_string($conn, $_GET['receiver_id']);
    $message     = $_POST['message'];
    
    $query = "insert into chats (
        `sender_id`, 
        `receiver_id`, 
        `message`) values (
            '$user_id',
            '$receiver_id',
            '$message'

        )";

    $execute = mysqli_query($conn, $query) or die ("unsuccessfull query");
}

?>