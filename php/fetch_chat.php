<?php require_once "session.php";


$query = "select * from chats where (sender_id = '$user_id' and receiver_id = '16') or (sender_id = '16' and receiver_id = '$user_id')";
$chat_result = mysqli_query($conn, $query) or die ("unsuccssful query");
$chat_row = mysqli_fetch_array($chat_result);

while ($chat_row = $chat_result-> fetch_assoc()){
    $sender_id = $chat_row['sender_id'];
    $message   = $chat_row['message'];
    
    echo '
    <div class="receiver_message">
    '.$message.'
    </div>
    ';

}
 



?>
