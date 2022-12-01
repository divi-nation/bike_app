<?php require_once "php/session.php";



//fething other user's infomation
$query = "select business_name from users where id = '$other_user_id'";
$o_result = mysqli_query($conn, $query);
$o_row = mysqli_fetch_array($o_result);
$b_name = "Businees Name";
$b_name = $o_row['business_name'];

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/chat.css">
    <link rel="stylesheet" href="components_style/top_bar.css">

</head>
<body>
    <div class="container">
        <?php 
        $bar_title = "chating with ... ".$b_name;
        $back_url  = "homepage.php";
        
        require_once "components/top_bar.php"?>
       
        <div id="refresh" class="chats">
            <?php
                $query = "select * from chats where (sender_id = '$current_user_id' and receiver_id = '$other_user_id') or (sender_id = '$other_user_id' and receiver_id = '$current_user_id') order by message_id ";
 
                $chat_result = mysqli_query($conn, $query) or die ("unsuccssful query");
                $chat_row = mysqli_fetch_array($chat_result);

                while ($chat_row = $chat_result-> fetch_assoc()){

                     $message   = $chat_row['message'];
                     $sender_id = $chat_row['sender_id'];
                     $receiver_id = $chat_row['receiver_id'];
                  
                    if($sender_id == $current_user_id){
                        echo '
                        <div class="sender_message">
                        '.$message.'
                        </div>
                        ';

                    }
                    else{
                        echo '
                        <div class="receiver_message">
                        '.$message.'
                        </div>
                        ';
                        
                    }
                   
                }






?>

            
          
        </div>
        <form action="php/chat_handler.php" method="post">
            <div class="input">
                <input class="message" type="text" placeholder="type a message" name="message" onclick="toggle_items('.input')">
              <!--  <input class="send" type="submit" value="SEND" name="send"> -->
              <button type='button' class="send" id="btn" name="submit">SEND</button>
            </div>
        </form>
    </div>
    <script
	 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js">
    </script>
        <script>
        function refresh(){
            $('#refresh').load(location.href + " #refresh");
            setTimeout(() => { 
                refresh(); }, 5000);
         }
        
    </script>
    <script src="javascript/script.js"></script>
    <script>
        $("#btn").click(() => {
            var message = $(".message").val();

            //ajax
            $.ajax({
                
                type : 'post',
                url: 'php/chat_handler.php?receiver_id=<?php echo $other_user_id ?>',
                data: {
                    'message': message,
                 },
                 success: function(resp){
                    $(".message").empty();

                    refresh();
 
                 }
            })
              
        })

    </script>

  
</body>
</html>