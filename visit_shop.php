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
 

</head>
<body>
    <div class="container">
        <div class="topBar generalTopBar">
                <div class="backIcon" onclick="location.href='homepage.php'">
                    <i class="bi bi-arrow-left"></i>

                </div>

                <div class="shopName">
                    <!--FEBTCHING CURRE-->
                    <h6><?php echo $row_c['business_name']; ?></h6>

                </div>

                <div class="visitShop">

                    <div class="visit">
                        <p>CHAT</p>
                    </div>

                </div>
            </div>

            <div class="content">
            <?php
            //selecting everything from post tes
                $sql = "SELECT * FROM post_test";
                $result = mysqli_query($conn, $sql) or die ("Unsuccessful Query");
                // $row = mysqli_fetch_array($result);
                $row_count_s = 1;
                if ($result->num_rows > 0){
                    while ($row = $result-> fetch_assoc()){

                         

                        // checking is the user id of a post is same as the current post's poster (me saf ano dey barb the english adey rep, you figa ebe joke) ... BUt the code dey job so no yawa
                        if ($row['user_id'] == $poster_id){
                        
                            $item_name = $row['post_title'];
                            $post_price = $row['post_price'];
                            $post_image_1 = $row['post_image_1'];
   




                             echo '
                                                            
                                <div class="s_element">
                                <div class="s_image">
                                    <img src="php/images/'.$post_image_1.'"/>

                                </div>
                                <div class="s_info">
                                    <div class="post_title">
                                        <h4>'. $item_name . '</h4>
                                    </div>
                                    <div class="views_left">
                                        <h6>Price : GHC <span>'.$post_price. '</span> </h6>
                                    </div>

                                </div>
                                </div>'
                                ;

                        }

                        $row_count_s++;

                    
                    }
                }

            ?>

            
                


            </div>
        




            <?php require_once "components/bottom_navigation.php"?>



 


     </div>

    
</body>
</html>

