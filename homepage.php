<?php require_once "php/session.php"?>

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



</head>
<body>
  
 

    <div class="container bg">

        

 
        <div class="topBar">
            <div class="menuButton" onclick="toggle_items('.sidePanel'); toggle_items('.closing')">
            </div>
            <div class="businessName darkColor">
                <h6>BIKE</h6>
            </div>
            <div class="barz">
                <div class="barsContainer">
                    <div class="barsTexxt">
                        <h5>BARS :</h5>
                    </div>
                     <div class="numberOfBars">
                        <h6 ><?php echo $row_c['bars']; ?></h6>
                    </div>

                    

                </div>


            </div>


         </div>


        <div class="center">

         
            <div class="slide"></div>
          
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

        <div class="bottomNavigation">
          
            <div class="nIcon" onclick="location.href='messages.php'">
                <i class="bi bi-chat-dots"></i>
            </div>
            <div class="nIcon" onclick="location.href='homepage.php'">
                <i class="bi bi-house "></i>
            </div>
  
            <div class="nIcon" onclick="location.href='account.php'">
                <i class="bi bi-person-fill"></i>
            </div>

         
        
        </div>

    </div>


    <script>
        let number = document.getElementById("number");
        let counter = 0;

        setInterval(() => {
            if(counter == 65){
                clearInterval();
            }
            else{

            counter += 1;
            number.innerHTML = counter ;
                
            }
        }, 30);  

        function toggle_items(item_name){
            element = document.querySelector(item_name);
            element.classList.toggle("active")
        }

        function addActive(item_name){
            element = document.querySelector(item_name);
            element.classList.add("addActive")
        }


             

        window.onload = () => {
            
            element = document.querySelector(".loader");
            element.classList.add("active");

            element = document.querySelector(".fill");
            element.classList.add("active");


        }




    </script>

    
</body>
</html>