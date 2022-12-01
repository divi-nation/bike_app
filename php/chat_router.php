<?php require_once "session.php";
 

echo 'smt';

$query = "insert into my_chat (
        `user_id`,
        `friend_id`)
    values(
        '$user_id',
        '$poster_id')

    ";

$execute = mysqli_query($conn, $query) or die ("Unsuccessful Query");
 

if($query){
    header("refresh: 1, url=../chat.php");
 
    echo 'smt';

}
else{
    header("refresh:1, url=bike_through.php");
    echo 'smt bad';

}
  