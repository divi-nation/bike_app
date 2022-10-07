<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>

    <link rel = 'stylesheet' href = 'css/general.css'>
    <link rel = 'stylesheet' href = 'css/users.css'>
</head>
<body>
     
<div class = 'wrapper'>

        <main class='full-vhw bg'>
            <!-- Menu Element -->
            <div class = 'left full-vh full-w p-rel'>
                <div class = 'close-btn flex-center p-abs top-right' onclick = 'deactivate("main > .left");'>
                    <i class = 'bi bi-x-lg p-1'></i>
                </div>
                <?php require_once "templates/admin_menu.php"?>

            </div>
            <!-- End of Menu Element -->

            <!-- Admin Screen Element -->
            <div class = 'right full-vh full-w' >

                <div class = 'nav-bar full-w flex-row flex-between'>

                    <div class = 'left flex-row'>
                        <div class = 'menu-btn flex-row' onclick = 'activate("main > .left"); deactivate(".calender");'>
                            <i class = 'bi bi-grid-fill'></i>
                        </div>
                        <div class = 'panel-name'>Registered Users</div>
                    </div>
                    <div class = 'right'>
                        <div class = 'date-btn flex-row' onclick = 'activate(".calender"); deactivate("main > .left");'>
                            <i class = 'bi bi-calendar3'></i>
                            <span>Calender</span>
                        </div>
                    </div>

                </div>

            <!-- User Elemnt Begins-->
                <div class="search" style="border: 1px solid black;">
                    <input type="text" placeholder="Search " style="border: 1px solid black;">
                </div>

                <div class="heda">
                    <span class="off">User</span>
                    <span>Post Title</span>
                    <span class="off">Price</span>
                </div>

                <div class="users">

                
                <table>

                

                    
                    <?php
                        $conn = mysqli_connect("localhost", "root", "", "bike_app"); 
                        $sql = "SELECT * FROM lease";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0){
                            while ($row = $result-> fetch_assoc()){
                             //   echo "<tr><td>" . $row["fullname"] . /*"</td><td>" . $row["last_name(manager)"] . */"</td><td>" . $row["apartment_name"] . "</td><td>" . $row["apartment_category"] . "</td></tr>";
                                echo "\n<br>";

                                echo"<a href='user_details.php?ID={$row['id']}'> 
                                        
                                <span class='fullname'>   {$row['fullname']}              </span> 
                                
                                <span class='apatName'>   {$row['apartment_name']}        </span>
                                
                                <span class='category'>   {$row['apartment_category']}    </span>
                                
                                </a><br>\n";
                            }
                        }

                        else{
                            echo "no results";
                        }
                        $conn->close();

                    ?>

                </table>

                 
                </div>


                    
                    
                
            
                

            </div>
            <!-- End of Admin Screen Element -->

            <!-- Calender Element -->
            <div class = 'calender full-hw flex-col flex-center p-rel'>

                <div class = 'close-btn flex-center p-abs top-right' onclick = 'deactivate(".calender");'>
                    <i class = 'bi bi-x-lg p-1'></i>
                </div>

                <div class = 'date-btn start-btn full-w'>
                    <div class = 'btn'>START DATE</div>
                    <div class = 'value'>15th Feb 2022</div>
                </div>

                <div class = 'date-btn end-btn full-w'>
                    <div class = 'value'>15th Feb 2022</div>
                    <div class = 'btn'>END DATE</div>
                </div>
                
            </div>
            <!-- End of Calender Element -->
        </main>

</div>


    <script>
        function toggle_items(item_name){
            element = document.querySelector(item_name);
            element.classList.toggle("active");
        }


    </script>

    <script src = 'js/index.js'></script>
</body>
</html>


<!--                                echo"<a href='managerDetails.php?ID={$row['id']}' style='text-decoration: none; color: black;  position: absolute; border: 5px solid rgb(245, 245, 245); padding-bottom: 15px; padding-top: 15px; background: ; margin-bottom: 10px;'>{$row['fullname']} <span style='color: white;'>_________________________</span>{$row['apartment_name']} <span style='color: white;'>_________________________</span> {$row['apartment_category']}</a><br>\n";
