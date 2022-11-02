<?php require_once "php/session.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bikeThorugh.css">
    <link rel="stylesheet" href="css/bottomNavigation.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/topbar.css">
 
</head>
<body>
<div class="preloader">
            <img src="images/image-upload.gif" alt=""> 
        </div>

    <div class="container">
       
        <div class="topBar generalTopBar">
            <div class="backIcon" onclick="location.href='homepage.php'">
                <i class="bi bi-arrow-left"></i>

            </div>

            <div class="shopName">
                <h6><?php echo $row_p['business_name']; ?></h6>

            </div>

            <div class="visitShop">

                <div class="visit" onclick="location.href='visit_shop.php'">
                    <p>Visit <br>Shop</p>
                </div>

            </div>
        </div>

        <div class="middle bg">

        
            <div class="image">
                <img class="image1" src="php/images/<?php echo $post_row['post_image_1']?>">
                <img class="image2 active" src="php/images/<?php echo $post_row['post_image_2']?>">

                <div class="switch" onclick="toggle_items('.image2')">
                <i class="bi bi-arrow-down-up"></i>
            </div>
            </div>
            <div class="itemName">
                <h4><?php echo $post_row['post_title']; ?></h4>
            </div>
            <div class="description">
                <div class="change">
                    <div class="prev darkItem" onclick="location.href='count_neg.php'">
                        <h6>PREV</h6>
                    </div>
                    <div class="next darkItem" onclick="location.href='count.php'">
                        <h6>NEXT</h6>
                    </div>
                </div>

                <div class="price">
                     <p><?php echo $post_row['currency']?> <span><?php echo $post_row['post_price']; ?></span></p>

                    <h6><?php echo $post_row['region']?></h6>
                </div>

                <div class="desButton">
                    <div class="dBtn darkItem" onclick="toggle_items('.descriptionPopUp'); toggle_items('.descriptionDeactivate')">
                        <p>DESCRIPTION</p>
                    </div>
                
                </div>

                <div class="descriptionPopUp">
                    
                    <P><?php echo $post_row['post_description'];?> 
                    
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <h5>Item Name: <?php echo $post_row['post_title']; ?></h5>
                    <h5>Item Price: GHC <?php echo $post_row['post_price']; ?></h5>
                    <h5>Posted By: <?php echo $row_p['business_name']; ?></h5>
                    <h5>Available in: <?php echo $post_row['region']; ?></h5>
                    <h5>For more information, contact: <?php echo $post_row['contact']; ?></h5>
                    <span>
                        <h6>CHAT</h6>
                    </span>
                 </div>
 
 
            </div>

        </div>
        <div class="descriptionDeactivate" onclick="toggle_items('.descriptionPopUp'); toggle_items('.descriptionDeactivate')"></div>

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

    <?php
    function next_item(){
        header("refresh:1; url=bikeThroudgh.php");
    }
    ?>

    <script>
         function toggle_items(item_name){
            element = document.querySelector(item_name);
            element.classList.toggle("active");
        }

        var counting = 1;

        function next_item(){
            counting = count+1;
            header("refresh:1; url=bikeThrough.php");

 
 
        }
       
    </script>
    <script>

    window.onload = () => {
            
            element = document.querySelector(".preloader");
            element.classList.add("active");
             
           
             setTimeout(() => {
                element2 = document.querySelector(".next");
                element2.classList.add("active");
            }, 1000);
            

           

}

          function toggle_items(item_name){
            element = document.querySelector(item_name);
            element.classList.toggle("active");
        }
    </script>
    
</body>
</html>