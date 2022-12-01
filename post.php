<?php require_once "php/session.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bike App</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/post2.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
<?php 
        $bar_title = "POST";
        $back_url  = "homepage.php";
        
        require_once "components/top_bar.php"
    ?>
    <div class="container cen">
        
             <form class="" action="php/post_handler.php" method="post" enctype = "multipart/form-data">
                <div class="logo cen" onclick="location.href='homepage.php'">
                    <i class="bi bi-arrow-left-short"></i>
                </div>
               
                <div class="form_item">
                    <label>Product Name</label>
                    <input type="text" placeholder="type.." name="post_title" required>
                </div>
                <div class="twogrid">
                    <div class="currency">
                        <label>Currency</label>
                        <select name="currency">
                            <option selected>GHC</option>
                            <option>USD</option>
                            <option>NGN</option>
                            <option>CFA</option>
                            <option>EUR</option>
    
                        </select>
                     </div> 
                    <div class="price">
                        <label>Price</label>
                        <input type="text" placeholder="type..." name="post_price" required>
                    </div>

                </div>
             
                <div class="form_item">
                    <label>Description</label>
                    <input type="text" placeholder="type.." name="post_description" required>
                </div>
                <div class="form_item">
                    <label>Country </label>
                    <select name="country">
                        <option>Ghana</option>
                        <option>Nigeria</option>
                        <option>United Kindom</option>
                        
                    </select>
                </div>
                <div class="form_item">
                    <label>Availability (Region) </label>
                    <input type="text" placeholder="type..." name="region" required>
                </div>
                <div class="form_item">
                    <label>Max View (Based on Your Number Of Bars)</label>
                    <input type="text" placeholder="type..." name="post_max_views" onkeyup="checkmax(this.value)" required>
                </div>
                <div class="form_item">
                    <label>Contact Number</label>
                    <input type="text" placeholder="type.." name="contact" required>
                </div>
                <div class="form_item noborder">
                    <label>Images</label>
                    <input type="file" placeholder="type..." name="post_image_1" required>
                    <input type="file" placeholder="type..."  name="post_image_2"required>
                </div>

                <div class="submit">
                    <input type="submit" value="POST">
                    <div class="link_text">
                     </div>
                </div>
                
            </form>
            <div class="abstract"></div>
            <div class="abstract_two"></div>


            <script type="text/javascript">
                function checkmax(value){
                    var bars = <?php Print($bars); ?>;

                    if(value > bars){
                        swal("Your bars are not up to "+value+ ", Bike Through to earn more Bars", {
                        button: false,
                        icon: "error",
                     });

                    }
              

                }

            </script>


     </div>
    
</body>
</html>



























<!--
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/post.css">
     JavaScript Bundle with Popper
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/universalBackgrouund.css">
    <link rel="stylesheet" href="css/topbar.css">


 
    <title>Document</title>
</head>
<body>

    <div class="container bg">
        
        <div class="pTopBar generalTopBar" style="padding-bottom: 20px;">
            <div class="pBackIcon" onclick="location.href='homepage.php'">

            </div>

            <div class="pHeader">
                <h3>NEW POST</h3>
            </div>
        </div>

        <form action="php/post_handler.php" method="post" enctype = "multipart/form-data">
            <div class="title">
                <input type="text" placeholder="Post Title" name="post_title" >
            </div>

            <div class="pImages">
                <h6>Please Upload two(2) Pictures of the Product</h6>
                <div class="fCover">
                     <div class="fake">
                        <input type="file" name="post_image_1" >
                        <i class="bi bi-images"></i>
                    </div>

                <div class="fake">
                    <input type="file" name="post_image_2">
                    <i class="bi bi-images"></i>
                </div>

 
                </div>
               
            </div>


            <div class="description">
                <input type="text" placeholder="Description" name="post_description">
            </div>

            <div class="price">
                <input type="number" placeholder="Price" name="post_price">
            </div>

            <div class="numberOfViews">
                <div class="pText">
                    <h6>Set Number of viewers</h6>
                    <p>Based on your number of Bars</p>
                </div>
                <div class="views">
                    <input type="number" placeholder="1" name="post_max_views">
                </div>
            </div>


            <div class="availability">
                <div class="text">
                    <h6>Select Country Item is available in</h6>

                </div>

                <div class="location ">
                   <input type="text" placeholder="Country" name="country">
                 </div>
            </div>


            <div class="region availability">
                <div class="text">
                    <h6>Select Region, Leave empty if Delivery is Nationwide</h6>

                </div>

                <div class="location ">
                   <input type="text" placeholder="Region" name="region">
                 </div>
            </div>


            <div class="contact availability">
                <div class="text">
                    <h6>Provide Contact Number</h6>

                </div>

                <div class="location ">
                   <input type="text" placeholder="Contact" name="contact">
                 </div>
            </div>
            <div class="submit">
                <input class="darkItem" type="submit" value="POST" name="submit">

            </div>
        </form>

    </div>

    <script>


            function addActive(item_name){
            element = document.querySelector(item_name);
            element.classList.add("addActive")
        }

    </script>
 
    
</body>
</html>
-->