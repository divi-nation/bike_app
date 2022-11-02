<?php


ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

 


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$user_number = $_POST['user_number'];

$business_name = $_POST['business_name'];
$date_of_birth = $_POST['date_of_birth'];
$country = $_POST['counry'];
$phone = $_POST['phone'];
$bars = $_POST['bars'];

/*$email_owner = $_POST['email_owner'];

$property_name = $_POST['property_name'];
$property_type = $_POST['property_type'];
$property_location = $_POST['property_location'];
 


$first_name = $_POST['manager_id'];
$first_name = $_POST['manager_id'];
$first_name = $_POST['manager_id'];
$first_name = $_POST['manager_id'];
$first_name = $_POST['manager_id'];
$first_name = $_POST['manager_id'];

*/

$conn = new mysqli('localhost', 'root', '', 'bike_app');


$ID = mysqli_real_escape_string($conn, $_GET['ID']);

 
 
if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else
{
    
    

    if(isset($_POST['update'])){

        // UPDATE FIRST NAME MANAGER
        if ($first_name != null){
            $query = "update users set `first_name` = '$first_name' where user_id = $ID";
            $query_run = mysqli_query($conn, $query);

            if($query_run){   
                echo '<script type="text/javascript"> alert("First Name Updated") </script>';
            }
            else{
                echo '<script type="text/javascript"> alert("First Name  Not Updated, Something went wrong")</script>';
            }
            

     
        }
         // UPDATE LAST NAME MANAGER
        if($last_name != null){
            $query = "UPDATE `users` SET `last_name` = '$last_name' WHERE user_id = $ID";
            $query_run = mysqli_query($conn, $query);

                if($query_run){   
                    echo '<script type="text/javascript"> alert("Last Name Updated") </script>';
                }
                else{
                    echo '<script type="text/javascript"> alert("Last Name Not Updated, Something went wrong")</script>';
                }
            }
 

        // UPDATE EMAIL MANAGER
        if($user_number != null){
            $query = "UPDATE `users` SET `user_number` = '$user_number' WHERE user_id = $ID";
            $query_run = mysqli_query($conn, $query);

                if($query_run){   
                    echo '<script type="text/javascript"> alert("User Phone Updated Update") </script>';
                }
                else{
                    echo '<script type="text/javascript"> alert("User Phone Not Updated, Something went wrong")</script>';
                }
            }

      

        // UPDATE PHONE MANAGER
        if($business_name != null){
            $query = "UPDATE `users` SET `business_name` = '$business_name' WHERE user_id = $ID";
            $query_run = mysqli_query($conn, $query);

                if($query_run){   
                    echo '<script type="text/javascript"> alert("Business Name Updated") </script>';
                }
                else{
                    echo '<script type="text/javascript"> alert("Business Name Not Updated, Something went wrong")</script>';
                }
            }



        // UPDATE FIRST NAME OWNER
        if ($date_of_birth != null){
            $query = "update users set `date_of_birth` = '$date_of_birth' where user_id = $ID";
            $query_run = mysqli_query($conn, $query);

            if($query_run){   
                echo '<script type="text/javascript"> alert("User email Updated") </script>';
            }
            else{
                echo '<script type="text/javascript"> alert("User email Not Updated, Something went wrong")</script>';
            }
            

     
        }

        header("refresh:1; url=../admin/users.php?ID=$ID");

        // UPDATE LAST NAME OWNER
    }

}