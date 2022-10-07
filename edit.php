<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/post.css">

     <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/universalBackgrouund.css">
    <link rel="stylesheet" href="css/profile.css">

    <link rel="stylesheet" href="css/topbar.css">


 
    <title>Document</title>
</head>
<body>

    <div class="container bg">
        
        <div class="pTopBar generalTopBar" style="padding-bottom: 20px;">
            <div class="pBackIcon" onclick="location.href='homepage.php'">

            </div>

            <div class="pHeader">
                <h3>EDIT DETAILS</h3>
            </div>
        </div>

    <form action="php/accounts_handler.php" method="post">
        <div class="label availability">
            <div class="text">
                <h6>Business Name</h6>

            </div>

            <div class="data">
                <input type="text" placeholder="leave empty to remain unchanged" name="business_name">
            </div>
        </div>

        <div class="label availability">
            <div class="text">
                <h6>First Name</h6>

            </div>

            <div class="data">
                <input type="text" placeholder="leave empty to remain unchanged" name="first_name">
            </div>
        </div>

        <div class="label availability">
            <div class="text">
                <h6>Last Name</h6>

            </div>

            <div class="data">
                <input type="text" placeholder="leave empty to remain unchanged" name="last_name">
            </div>
        </div>

        <div class="label availability">
            <div class="text">
                <h6>Country</h6>

            </div>

            <div class="data">
                <input type="text" placeholder="leave empty to remain unchanged" name="country">
            </div>
        </div>

        <div class="label availability">
            <div class="text">
                <h6>Phone</h6>

            </div>

            <div class="data">
                <input type="text" placeholder="leave empty to remain unchanged" name="phone">
            </div>
        </div>

        <div class="label availability last">
            <div class="text">
                <h6>Password</h6>

            </div>

            <div class="data">
                <input type="text" placeholder="leave empty to remain unchanged" name="password">
            </div>
        </div>

        <div class="submit">
            <input class="darkItem" type="submit" value="UPDATE" name="submit">

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



















