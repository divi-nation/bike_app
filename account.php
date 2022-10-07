<?php require_once "php/accounts_handler.php"?>

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

</head>
<body>

    <div class="container">

        <div class="popup darkItem">
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
                        <h6><?php echo $row['business_name']?></h6>
                    </div>

                    <div class="description">
                        <p><span>DESCRIPTION : <br></span><?php echo $row['business_description']?></p>
                    </div>
                                        
                    <div class="con">
                        <div class="shopboard darkItem" onclick="location.href='shopboard.php'">
                            <p>My Shopboard</p>
                        </div>
                        
                    </div>
                   
 
                    <div class="totalPosts">
                        <p>4 <span>posts</span></p>
                    </div>


                    <div class="posts">
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
                    </div>


                    <div class="myPosts"></div>

                </div>


            </div>
 
    
            <div class="bottomNavigation">
          
                <div class="nIcon" onclick="location.href='messages.html'">
                    <i class="bi bi-chat-dots"></i>
                </div>
                <div class="nIcon" onclick="location.href='homepage.php'">
                    <i class="bi bi-house active"></i>
                </div>
      
                <div class="nIcon" onclick="location.href='account.html'">
                    <i class="bi bi-person-fill"></i>
                </div>

        </div>
        
    </div>       
        
   
<script>
    function toggle_items(item_name){
        element = document.querySelector(item_name);
        element.classList.toggle("active");
    }
</script>
    

</body>
</html>