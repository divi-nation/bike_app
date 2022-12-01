<?php
 $conn = mysqli_connect("localhost", "root", "", "bike_app"); 


 //count users
 $query = "select id from users";
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
 $total_users = $result->num_rows; 
 

 //count posts
 $query = "select id from post_test";
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
 $total_posts = $result->num_rows; 


//count bars
$result = mysqli_query($conn, 'SELECT SUM(bars) AS value_sum FROM users'); 
$row = mysqli_fetch_assoc($result); 
$total_bars = $row['value_sum'];

 

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>

    <link rel = 'stylesheet' href = 'css/general.css'>
    <link rel = 'stylesheet' href = 'css/index.css'>     
    
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
            <div class = 'right full-vh full-w'>

                <!-- Summary Element -->
                <div class = 'info full-hw'>

                    <div class = 'top-bar full-w flex-row flex-between'>

                        <div class = 'left'>
                            <div class = 'menu-btn flex-row' onclick = 'activate("main > .left"); deactivate(".calender");'>
                                <i class = 'bi bi-grid-fill'></i>
                            </div>
                        </div>

                        <div class = 'right'>
                            <div class = 'date-btn flex-row' onclick = 'activate(".calender"); deactivate("main > .left");'>
                                <i class = 'bi bi-calendar3'></i>
                                <span>Calender</span>
                            </div>
                        </div>

                    </div>

                    <div class = 'main-info'>
                        <!-- Summary Card -->
                        <div class = 'item'>

                            <div class = 'item-left'>
                                <h3>Bars</h3>
                                <div>Total User Bars</div>
                                <b><?php echo $total_bars?></b>
                            </div>

                            <div class = 'item-right flex-center'>
                                <div class = 'icon flex-center'>
                                    <i class = 'bi bi-cash-stack'></i>
                                </div>
                            </div>
                        </div>
                        <!-- End of Summary Card -->

                       
                        <div class = 'item'>

                            <div class = 'item-left'>
                                <h3>Users</h3>
                                <div>Number of Users</div>
                                <b><?php echo $total_users?></b>
                            </div>

                            <div class = 'item-right flex-center'>
                                <div class = 'icon flex-center'>
                                    <i class = 'bi bi-currency-dollar'></i>
                                </div>
                            </div>
                        </div>


                        <!-- Summary Card -->
                        <div class = 'item'>

                            <div class = 'item-left'>
                                <h3>New Users</h3>
                                <div>Registered Users This Month</div>
                                <b><?php echo $total_users?></b>
                            </div>

                            <div class = 'item-right flex-center'>
                                <div class = 'icon flex-center'>
                                    <i class = 'bi bi-house'></i>
                                </div>
                            </div>
                        </div>
                        <!-- End of Summar<?php echo $total_users?>y Card -->
                        <!-- Summary Card -->
                        <div class = 'item'>

                            <div class = 'item-left'>
                                <h3>Active Posts</h3>
                                <div>Total Bike Posts</div>
                                <b><?php echo $total_posts?></b>
                            </div>

                            <div class = 'item-right flex-center'>
                                <div class = 'icon flex-center'>
                                    <i class = 'bi bi-grid-3x3'></i>
                                </div>
                            </div>
                        </div>
                        <!-- End of Summary Card -->
                        <!-- End of Summary Card -->

                        <!-- Summary Card -->
                         
                        <!-- End of Summary Card -->

                        <!-- Summary Card -->
                         
                        <!-- End of Summary Card -->
                    </div>

 
                  
                </div>
                <!-- End of Summary Element -->

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

            </div>
            <!-- End of Admin Screen Element -->
        </main>

</div>
    <script src = 'js/index.js'></script>
</body>
</html>
