<?php require_once "php/accounts_handler.php"; require_once "php/session.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/account.css">
<!--    <link rel="stylesheet" href="../css/loader.css">  -->
    <link rel="stylesheet" href="css/bottomNavigation.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/topbar.css">
    <link rel="stylesheet" href="css/universalBackgrouund.css">
    <link rel="stylesheet" href="css/shopboard.css">

</head>
<body>

    <div class="container">

        <div class="popup">
            <div class="item darkItem" onclick="location.href='profile.php'"><h4>VIEW PROFILE</h4></div>
 
        </div>
        <div class="background" onclick="toggle_items('.popup'); toggle_items('.background')"></div>
        <div class="phone">
            <div class="topNavigation generalTopBar">
                <div class="backIcon" onclick="location.href='homepage.php'">
                    <i class="bi bi-arrow-left"></i>
                </div>
                <div class="title">
                    <h6>Account</h6>
                </div>
                <div class="icons" onclick="toggle_items('.popup'); toggle_items('.background')">
                    <i class="bi bi-three-dots-vertical"></i>
                </div>
            </div>

            <div class="center bg">
                

                <div class="flow">
                    <div class="pPicture">
                        <img src="images/pexels-ron-lach-9785004.jpg">
                    </div>
                    <div class="bName">
                        <h6><?php echo $row_c['business_name']?></h6>
                    </div>

                    <div class="description">
                        <p><span>DESCRIPTION : <br></span><?php echo $row_c['business_description']?></p>
                    </div>
                                        
                    <!-- <div class="con">
                        <div class="shopboard darkItem" onclick="location.href='shopboard.php'">
                            <p>My Shopboard</p>
                        </div>
                        
                    </div>
                    -->
 
                    <div class="totalPosts">
                        <p id="count"><span></span></p> <p class="p"> Active Posts</p>
                    </div>

                    <div class="content">
                        <?php
                        //selecting everything posted by current user(posts that are still active) 
                            $sql = "SELECT * FROM post_test where user_id = $user_id";
                            $result = mysqli_query($conn, $sql) or die ("Unsuccessful Query");
                            // $row = mysqli_fetch_array($result);
                            $row_count_s = 0;
                            $count = 0;
                            if ($result->num_rows > 0){
                                while ($row = $result-> fetch_assoc()){

                                    


                                        //  $count = $count + 1;

                                        // $sql_2 = "SELECT * FROM post_test where user_id = $user_id";
                                        // $result_2 = mysqli_query($conn, $sql_2) or die ("Unsuccessful Query");
                                        // $row_2 = mysqli_fetch_array($result_2);

                                        $item_name = $row['post_title'];
                                        $post_view_left = $row['post_max_views'];
                                        $post_image_1 = $row['post_image_1'];
            




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
                                            $count++;


                                    }

 

                                
                                }
 
                        ?>
                    </div>
        


                    <!-- <div class="posts">
                        <div class="element">
                            <div class="pTitle">
                                <p>Item Name</p>
                            </div>
                            <div class="views darkItem">
                                <div class="numberOfViews">
                                    <h6>VIEWS: 10/500</h6>
                                </div>

                                <div class="note">
                                    <p>will disappear after 500 views</p>
                                </div>
                            </div>
                        </div>
                        <div class="element">
                            <div class="pTitle">
                                <p>Item Name</p>
                            </div>
                            <div class="views darkItem">
                                <div class="numberOfViews">
                                    <h6>VIEWS: 10/500</h6>
                                </div>

                                <div class="note">
                                    <p>will disappear after 500 views</p>
                                </div>
                            </div>
                        </div>
                        <div class="element">
                            <div class="pTitle">
                                <p>Item Name</p>
                            </div>
                            <div class="views darkItem">
                                <div class="numberOfViews">
                                    <h6>VIEWS: 10/500</h6>
                                </div>

                                <div class="note">
                                    <p>will disappear after 500 views</p>
                                </div>
                            </div>
                        </div>
                        <div class="element">
                            <div class="pTitle">
                                <p>Item Name</p>
                            </div>
                            <div class="views darkItem">
                                <div class="numberOfViews">
                                    <h6>VIEWS: 10/500</h6>
                                </div>

                                <div class="note">
                                    <p>will disappear after 500 views</p>
                                </div>
                            </div>
                        </div>
                    </div> -->


                    <div class="myPosts"></div>

                </div>


            </div>
 
    
            <?php require_once "components/bottom_navigation.php"?>

        
    </div>       
        
   
<script>
    function toggle_items(item_name){
        element = document.querySelector(item_name);
        element.classList.toggle("active");
    }

    var count = <?php echo $count ?>;
    document.getElementById("count").innerHTML = count;
</script>
    

</body>
</html>