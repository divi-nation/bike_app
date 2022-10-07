<?php require_once "php/session.php";

//this page shows everything posted by the user, on whose product the visit shop button was clicked?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bottomNavigation.css">
    <link rel="stylesheet" href="css/shopboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
     <link rel="stylesheet" href="css/bikeThorugh.css">
    <link rel="stylesheet" href="css/bottomNavigation.css">
     <link rel="stylesheet" href="css/topbar.css">
     <link rel="stylesheet" href="css/messages.css">

 

</head>
<body>
    <div class="container">
        <div class="topBar generalTopBar">
                <div class="backIcon" onclick="location.href='homepage.php'">
                    <i class="bi bi-arrow-left"></i>

                </div>

                <div class="shopName" onclick="toggle_items('.chat')">
                    <!--FEBTCHING CURRE-->
                    <h6 onclick="toggle_items('.profilePic')"><?php echo $row_c['business_name']; ?></h6>

                </div>

                <div class="visitShop">

                    <div class="visit">
                        <p>Visit <br>Shop</p>
                    </div>

                </div>
            </div>

            <div class="content">
            <?php
            //selecting everything from intrested
                $sql = "SELECT * FROM intrested";
                $result = mysqli_query($conn, $sql) or die ("Unsuccessful Query");
                $row = mysqli_fetch_array($result);
                $row_count_s = 1;
                if ($result->num_rows > 0){
                    while ($row = $result-> fetch_assoc()){
 
                         if ($user_id == $row['int_poster_id']){


                        // checking if the user id of a post is same as the current post's poster (me saf ano dey barb the english adey rep, you figa ebe joke) ... BUt the code dey job so no yawa
                             $int_user_id = $row['int_user_id'];

                            $query_2 = "select business_name, phone from users where id = '$int_user_id'";
                            $result_2 = mysqli_query($conn, $query_2) or die ("Unsuccessful Query");
                            $row_2 = mysqli_fetch_array($result_2);
                            $intrestee_business_name = $row_2['business_name'];
                            $intrestee_phone = $row_2['phone'];

                            $int_item_id = $row['int_item_id'];

                            $query_3 = "select post_title, post_image_1 from post_test where id = '$int_item_id'";
                            $result_3 = mysqli_query($conn, $query_3) or die ("Unsuccessful Query");
                            $row_3 = mysqli_fetch_array($result_3);

                            $int_item_name = $row_3['post_title'];
                            $int_item_image = $row_3['post_image_1'];

                            echo '

                            <div class="chat">
                                <div class="left">
                                    <div class="item_image">
                                        <img src="php/images/'.$int_item_image.'">
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="int_name">
                                        <h5>'.$intrestee_business_name.'</h5>
                                    </div>
            
                                    <div class="message">
                                    <p>Is intrested in your <span>'.$int_item_name.'</span></p>
                                    <div class="contact">
                                        <p><i class="bi bi-telephone-forward"></i>'.$intrestee_phone.'</p>
                                    </div>
                                    </div>
            
                                </div>
        
                            </div>
        
        
        
                         
                  
                    
                        
        
        
                             </div>
                

                            
                            
                            
                            ';




                          
                           

 

 
                        $row_count_s++;

                    
                    }
                }
                }


            ?>

               
              




    <div class="bottomNavigation">
            
            <div class="nIcon" onclick="location.href='messages.html'">
                <i class="bi bi-chat-dots"></i>
            </div>
            <div class="nIcon" onclick="location.href='homepage.php'">
                <i class="bi bi-house active"></i>
            </div>

            <div class="nIcon" onclick="location.href='account.php'">
                <i class="bi bi-person-fill"></i>
            </div>
    </div>


 


     </div>

     <?php

     echo '

     <script>
        function toggle_items(item_name){
            element = document.querySelector(item_name);
            element.classList.toggle("active");
           
        }

    </script>
    '

    ?>

    
</body>
</html>

