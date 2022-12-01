<?php require_once "php/session.php";
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/homepage2.0.css">
     <!-- JavaScript Bundle with Popper -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
     <link rel="stylesheet" href="css/loader.css">
     <link rel="stylesheet" href="css/bottomNavigation.css">
     <link rel="stylesheet" href="css/universalBackgrouund.css">
     <link rel="manifest" href="pwa_files/manifest.json">
     <script
	 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js">
    </script>    
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script> 
     <script>
     
        window.onload = () => {
            

            
            element = document.querySelector(".loader");
            element.classList.add("active");

            element = document.querySelector(".fill");
            element.classList.add("active");

            // setInterval(function () {
            //     refresh();
 
             
            // }, 4000); 

        

        }
     </script>
     <script>

        function refresh(){
            $('#refresh').load(location.href + " #refresh");

            setInterval(function () {
                $('#refresh').load(location.href + " #refresh");

             
            }, 4000); 
        }



      

    </script>
    <script>
       // if browser supports a js service worker..
        // if('serviceWorker' in navigator){
            navigator.serviceWorker.register('pwa_files/sw.js');  
        // }
    </script>



</head>
<body>
  
 

    <div class="container bg">
    
 
  


        <div class="center">
            <div class="top">
                <div class="left" onclick="refresh()">
                    <div class="logo">
                        <img src='images/photo_2022-04-21_10-42-19-removebg-preview.png'>

                    </div>
                    <div class="app">
                        BIKE
                    </div>
                </div>

                <div class="right">
                    Bars : <?php echo $row_c['bars']; ?>
                </div>

            </div>
            <div class="randoms">

                <div id="refresh" class="r_box">
                    <?php
                         

                      $random_rambler = "<script>document.write(num);</script>";
                    //   echo $random_rambler;

 
                        $r_query = "select * from post_test order by rand() limit 1";
                        $r_result = mysqli_query($conn, $r_query);
                        $r_row = mysqli_fetch_array($r_result);

                        $r_image = $r_row['post_image_1'];
                        $r_name = $r_row['post_title'];
                        echo "<script>refresh()</script>";
                        
 


                    ?>
                    <img src='php/images/<?php echo $r_image ?>'>
                    <div class="r_text">
                        <?php echo $r_name;?>
                    </div>
                </div>

            </div>

         
           
            <div class="functionalities">
                <div class="box darkItem" onclick="location.href='bikeThrough.php'";>
                    <div class="icon">
                    <i class="bi bi-binoculars"></i>
                    </div>
                    <div class="fText">
                        <h6>Bike</h6>
                        <h6 class="small">Through</h6>
                        <div class="centerText">
                            <p>To earn more <br>Bars!</p>

                        </div>
                    </div>

                </div>

                <div class="box darkItem" onclick='location.href="post.php"'>
                    <div class="icon">
                    <i class="bi bi-arrow-up-circle"></i>

                    </div>
                    <div class="fText">
                        <h6>Post</h6>
                        <div class="centerText">

                            <p>Advertise something</p>
                        </div>
                    </div>

                </div>

                <div class="box darkItem" onclick="location.href='search.php'">
                    <div class="icon">
                        <i class="bi bi-search"></i>

                    </div>
                    <div class="fText">
                        <h6>Bike</h6>
                        <h6>Search</h6>
                        <div class="centerText">
                            <p>Look up a business</p>
                        </div>
                </div>


                <div class="loader">
                    <div class="logo"></div>
                    <div class="fill"></div>

                </div>
            </div>
              
            </div>
        </div>
 

        </div>

        <?php require_once "components/bottom_navigation.php"?>

       

    </div>


    <script>
        // let number = document.getElementById("number");
        // let counter = 0;

        // setInterval(() => {
        //     if(counter == 65){
        //         clearInterval();
        //     }
        //     else{

        //     counter += 1;
        //     number.innerHTML = counter ;
                
        //     }
        // }, 30);  

        function toggle_items(item_name){
            element = document.querySelector(item_name);
            element.classList.toggle("active")
        }
 
        function addActive(item_name){
            element = document.querySelector(item_name);
            element.classList.add("addActive")
        }


             

      

         

         var num = 5;

 



    </script>

    
</body>
</html>