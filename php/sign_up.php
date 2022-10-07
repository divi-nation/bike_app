<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 
    $first_name    = $_POST['first_name'];
    $last_name     = $_POST['last_name'];
    $date_of_birth = $_POST['date_of_birth'];
    $email       = $_POST['email'];

    $business_name = $_POST['business_name'];
    $country        = $_POST['country'];
    $phone         = $_POST['phone'];
    $password      = $_POST['password'];
    

 
    $conn = new mysqli('localhost', 'root', '', 'bike_app');

    if ($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else
    {
         //checking if business_name already exists
         $query = "select * from users where business_name = '$business_name'";
         $execute = mysqli_query($conn, $query) or die ("unsuccessful query");



         $sql = "INSERT INTO `users` (`first_name`, `last_name`, `date_of_birth`, `email`, `business_name`, `country`, `phone`, `password`) values ('$first_name', '$last_name', '$date_of_birth', '$email', '$business_name', '$country', '$phone', '$password')";
         $query = mysqli_query($conn, $sql);
         $result = $query->get_result()->fetch_assoc();
         $b_name = $result['business_name'];

         if ($business != null){
            echo "<script>alert('The Business Name you chose already exist, please choose another one');</script>";
            header("refresh: 1")
         }
 


  


    if($query){
        echo "<script type='text/javascript'>alert('REGISTRATION SUCESSFULL')</script>";

        $sql = 'select id from users where phone = ?';
        $sql = $conn->prepare($sql);
        $sql->bind_param('s', $phone);
        $sql->execute();

        $result = $sql->get_result()->fetch_assoc();
        $id = $result['id'];


        $stmt = $conn->prepare("insert into accounts (`user_id`, `business_name`) values (?,?)");
        $stmt->bind_param("is", $id, $business_name);
        $stmt->execute();

        


        header("refresh:1; url=../index.html");

    }

    else{
        echo "error occured";
    }

    }
?>