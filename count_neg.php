
<?php require_once "php/session.php";
 
ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);




 
   $conn = new mysqli("localhost", "root", "", "bike_app");

    $user_id = $_SESSION['id'];

    $query = "select * from users where id = '$user_id'";
    $result = mysqli_query($conn, $query) or die ("Unsuccessful Query");
    $row = mysqli_fetch_array($result);

    $update_count = $row['biking_count'] - 1;

    if ($update_count < 1){
      $update_count = 1;
    }

    
    $query_2 = "update users set `biking_count` = '$update_count' where id = $user_id";
    $result_2 = mysqli_query($conn, $query_2) or die ("Unsuccessful Query");

    header("Location: bikeThrough.php");

 
     


 