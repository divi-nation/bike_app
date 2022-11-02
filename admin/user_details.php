<?php


ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

if(isset($_GET['ID'])){

    $conn = mysqli_connect("localhost", "root", "", "bike_app"); 
    


    $ID = mysqli_real_escape_string($conn, $_GET['ID']);



    $sql = "SELECT * FROM users WHERE id='$ID'";
    $result = mysqli_query($conn, $sql) or die ("Unsuccessful Query");
    $row = mysqli_fetch_array($result);


}

else{
    header("refresh:1; url=users.php");
}


?>

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
    <div class="cover2">
        <form action="../php/update_managers.php?ID=<?php echo $row['id']?>" method="post">
            <div class="userInformation">
                <div class="userDetails">
        
                    <div class="element">
                        <div class="lable">
                            <h4>ID</h4>
                        </div>
                        <div class="lableInfo">
                            <input type="text" name="id">
                            
                        </div>
            
                    </div>
                        
            
                    <div class="element">
                            <div class="lable">
                                <h4>First Name </h4>
                            </div>
                            <div class="lableInfo">
                                <input type="text" name="first_name">
                                
                            </div>
            
                        </div>
            
                        <div class="element">
                        <div class="lable">
                            <h4>Last Name</h4>
                        </div>
                        <div class="lableInfo">
                            <input type="text" name="last_name">
                            
                        </div>
            
                    </div>
            
                    <div class="element">
                    <div class="lable">
                        <h4>Business Name</h4>
                    </div>
                    <div class="lableInfo">
                        <input type="text" name="business_name">
                        
                    </div>
            
                    </div>


                    <div class="element">
                        <div class="lable">
                            <h4>Date Of Birth</h4>
                        </div>
                        <div class="lableInfo">
                            <input type="text" name="date_of_birth">
                            
                        </div>
                
                    </div>
                
            
                    
                    
        
        
        
                    <div class="element">
                    <div class="lable">
                        <h4>Country</h4>
                    </div>
                    <div class="lableInfo">
                        <input type="text" name="country">
                        
                    </div>
                    </div>
        
        
                    <div class="element">
                    <div class="lable">
                        <h4>Phone</h4>
                    </div>
                    <div class="lableInfo">
                        <input type="text" name="phone">
                        
                    </div>
                    

                    
        
        
        
        
                    </div>


                
                    <div class="element">
                        <div class="lable">
                            <h4>Bars</h4>
                        </div>
                        <div class="lableInfo">
                            <input type="text" name="bars">
                            
                        </div>
                    </div>
        
        
                </div>
        
            </div>


            <div class="updateButton">
                <input type="submit" value="UPDATE" class="uBtn" name="update">
                
    
                </div>
                <div class="uBtn" onclick="toggle_items('.cover2')">
                    <h6>CANCEL</h6>
        
                    </div>
            </div>

        </form>
    
    </div>
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
                        <div class = 'panel-name'>Manager Details</div>
                    </div>
                    <div class = 'right'>
                        <div class = 'date-btn flex-row' onclick = 'activate(".calender"); deactivate("main > .left");'>
                            <i class = 'bi bi-calendar3'></i>
                            <span>Calender</span>
                        </div>
                    </div>

                </div>

             <!-- User Elemnt Begins-->
               <div class="users" style='height: calc(100% - 90px); padding: 20px;'>
                   <div class="edit" onclick="toggle_items('.cover2')">
                       <h6>Edit</h6>
                   </div>
                   <div class="cover">
                        <div class="userInformation">
                            <div class="userDetails">


                                        <div class="element">
                                            <div class="lable">
                                                <h4>ID</h4>
                                            </div>
                                            <div class="lableInfo">
                                                <p><?php echo $row['id']?></p>
                                            </div>
                                        </div>
                                            

                                        <div class="element">
                                                <div class="lable">
                                                    <h4>Firstname</h4>
                                                </div>
                                                <div class="lableInfo">
                                                    <p><?php echo $row['first_name']?></p>
                                                </div>
                                        </div>

            
                                        <div class="element">
                                            <div class="lable">
                                                <h4>Lastname</h4>
                                            </div>
                                            <div class="lableInfo">
                                                <p><?php echo $row['last_name']?></p> 
                                            </div>

                                        </div>

                                    

                                        <div class="element">
                                                <div class="lable">
                                                    <h4>Date Of Birth</h4>
                                                </div>
                                                <div class="lableInfo">
                                                <p><?php echo $row['date_of_birth']?></p>
                                                    
                                                </div>
                                        </div>


                                        <div class="element">
                                                <div class="lable">
                                                    <h4>Country</h4>
                                                </div>
                                                <div class="lableInfo">
                                                <p><?php echo $row['email']?></p>
                                                    
                                                </div>

                                        </div> 



                                        <div class="element">
                                                <div class="lable">
                                                    <h4>Business Name</h4>
                                                </div>
                                                <div class="lableInfo">
                                                <p><?php echo $row['business_name']?></p>
                                                    
                                                </div>
                                        </div>



                                        <div class="element">
                                                <div class="lable">
                                                    <h4>Country</h4>
                                                </div>
                                                <div class="lableInfo">
                                                <p><?php echo $row['country']?></p>
                                                    
                                                </div>

                                        </div> 



 



                                        <div class="element">
                                                <div class="lable">
                                                    <h4>Phone</h4>
                                                </div>
                                                <div class="lableInfo">
                                                <p><?php echo $row['phone']?></p>
                                                    
                                                </div>

                                        </div> 



                                        <div class="element">
                                                <div class="lable">
                                                    <h4>password</h4>
                                                </div>
                                                <div class="lableInfo">
                                                <p><?php echo $row['password']?></p>
                                                    
                                                </div>

                                        </div> 
                       
                                                    


                                        <div class="element">
                                                <div class="lable">
                                                    <h4>Bars</h4>
                                                </div>
                                                <div class="lableInfo">
                                                <p><?php echo $row['bars']?></p>
                                                    
                                                </div>

                                        </div> 
                                                    

                                      
            

                
                            </div>
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