<?php require_once "php/accounts_handler.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/post.css">
    <link rel="stylesheet" href="css/profile.css">

     <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/universalBackgrouund.css">
    <link rel="stylesheet" href="css/topbar.css">


    $count = $row['biking_count'];

    <title>Document</title>
</head>
<body>

    <div class="container bg">
        
        <div class="pTopBar generalTopBar" style="padding-bottom: 20px;">
            <div class="pBackIcon" onclick="location.href='homepage.php'">

            </div>

            <div class="pHeader">
                <h3>MY PROFILE</h3>
            </div>
        </div>


        <div class="label availability">
            <div class="text">
                <h6>Business Name</h6>

            </div>

            <div class="data">
                <h6><?php echo $row['business_name']?></h6>
              </div>
        </div>
        <div class="label availability">
            <div class="text">
                <h6>Bars</h6>

            </div>

            <div class="data">
                 <h6><?php echo $row['bars']?></h6>
              </div>
        </div>


        <div class="label availability">
            <div class="text">
                <h6>Full Name</h6>

            </div>

            <div class="data">
                <h6><?php echo $row['first_name']." ".$row['last_name']?></h6>
              </div>
        </div>

        <div class="label availability">
            <div class="text">
                <h6>Phone</h6>

            </div>

            <div class="data">
                 <h6><?php echo $row['phone']?></h6>
              </div>
        </div>


        <div class="label availability last">
            <div class="text">
                <h6>Country</h6>

            </div>

            <div class="data">
                 <h6><?php echo $row['country']?></h6>
              </div>
        </div>

        <div class="submit">
            <input class="darkItem" type="submit" value="EDIT" name="submit" onclick="location.href='edit.php'">

        </div>



       
    </div>

    <script>


            function addActive(item_name){
            element = document.querySelector(item_name);
            element.classList.add("addActive")
        }

    </script>
 
    
</body>
</html>



















