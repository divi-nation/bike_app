<?php require_once "php/session.php";?>



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
                        <p>Visit <br>Shop</p>
                    </div>

                </div>
            </div>

            <div class="content">
                <?php
                //selecting everything posted by current user(posts that are still active) 
                    $sql = "SELECT * FROM post_test";
                    $result = mysqli_query($conn, $sql) or die ("Unsuccessful Query");
                    $row = mysqli_fetch_array($result);
                    $row_count_s = 1;
                    if ($result->num_rows > 0){
                        while ($row = $result-> fetch_assoc()){

                            


                            if ($row['user_id'] == $user_id){
                                $sql_2 = "SELECT * FROM post_test where id = $row_count_s";
                                $result_2 = mysqli_query($conn, $sql_2) or die ("Unsuccessful Query");
                                $row_2 = mysqli_fetch_array($result_2);

                                $item_name = $row_2['post_title'];
                                $post_view_left = $row_2['post_max_views'];
                                $post_image_1 = $row_2['post_image_1'];
    




                                echo '
                                                                
                                    <div class="s_element">
                                    <div class="s_image">
                                        <img src="php/images/'.$post_image_1.'"/>

                                    </div>
                                    <div class="s_info">
                                        <div class="post_title">
                                            <h4>'; echo $item_name; echo '</h4>
                                        </div>
                                        <div class="views_left">
                                            <h6>Views Left : <span>'; echo $post_view_left; echo '</span> </h6>
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

    
</body>
</html>

