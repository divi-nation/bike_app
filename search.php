<?php require_once "conn.php";

if(isset($_POST['search'])){
 
    $business_name = $_POST['business_name'];
    $business_name = substr($business_name, 0, 3);

    $query = "select id, business_name, country from users where business_name like '%$business_name%' limit 10";
    $result = $conn->query($query);




}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/loader.css">
    <link rel="stylesheet" href="css/search.css">




</head>
<body>
    <div class="container">
        <div class="loader">
            <div class="logo"></div>
            <div class="fill"></div>
        </div>

        <div class="search_container">
 
                <form action='search.php' method='post'>
                     <input name='business_name' class='self' type='text' placeholder='Enter Business Name to Search'>
                     <input class='submit' type='submit' value='Search' name='search'>
                     <i class="bi bi-search"></i>
 
                </form>  
        </div>

        <div class="remaining_content">
        

        <?php
        
            if(isset($_POST['search'])){
                    
                if ($result->num_rows > 0){
                    while ($row = $result-> fetch_assoc()){
                        $id     = $row['id'];
                        $b_name = $row['business_name'];
                        $b_loc  = $row['country'];
                        echo '

                        <div class="search_item" onclick="location.href=\'view_shop.php?id='.$id.'\'">
                            <h5>'.$b_name.'</h5>
                            <h6>'.$b_loc.'</h6>
                        </div>
                        
                        
                        ';

                    }
                }
            }
            


        ?>
            

        </div>
          



    </div>
    <?php require_once "components/bottom_navigation.php"?>


 

    <script>

        window.onload = () => {
            
            element = document.querySelector(".loader");
            element.classList.add("active");

            element = document.querySelector(".fill");
            element.classList.add("active");


        }

    </script>
    
</body>
</html>