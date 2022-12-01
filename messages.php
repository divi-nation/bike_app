<?php 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/messages.css">
</head>
<body>
    <div class="container">
    <?php 
        $bar_title = "CHATS";
        $back_url  = "homepage.php";
        
        require_once "components/top_bar.php"
    ?>

        <div class="chats">

        <?php

    //selecting freind id from my_what
        require_once "php/session.php";
        $query = "select distinct friend_id from my_chat where user_id = '$user_id'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
 
       // echo $result->num_rows; 
 
        if ($result->num_rows > 0){
            while ($row = $result-> fetch_assoc()){

         

                $friend_id = $row['friend_id'];
 
                $query_2 = "SELECT DISTINCT business_name from users where id = '$friend_id'";
                $result_2 = mysqli_query($conn, $query_2);
                $row_2 = mysqli_fetch_array($result_2);

                $b_name = $row_2['business_name'];
        
                echo '

                <div class="chat" onclick="location.href=\'chat.php?id_f_messages='.$friend_id.'\'">
                        <div class="pic">

                        </div>
                        <div class="info">
                            <h5>'.$b_name.'</h5>
                            <h6>Has sent you a message</h6>
                        </div>
                    </div>
                
                ';

         
            }

         }


      

 



        ?>
            
        </div>
       
    </div>
    <?php require_once "components/bottom_navigation.php"?>

    
</body>
</html>