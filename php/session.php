<?php session_start();
//  ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

 
if (!isset($_SESSION['id']) || $_SESSION['id'] == null){
    header("Location: index.html");
}



else{

    $user_id =  $_SESSION['id'];
    $conn = mysqli_connect("localhost", "root", "", "bike_app"); 


    //counting the number of posts 
    $sql = "SELECT * FROM post_test";
    $result = $conn->query($sql);

    $row_count = 1;
    if ($result->num_rows > 0){
        while ($row = $result-> fetch_assoc()){
             $row_count++;
        
        }
    }

 

    //querying the users table for the biking count
 
    $query_c = "select * from users where id = '$user_id'";
    $result_c = mysqli_query($conn, $query_c) or die ("Unsuccessful Query");
    $row_c = mysqli_fetch_array($result_c);
   

    //if the value of the user biking count is not empty
    if ($row_c['biking_count'] != null){
        $count = $row_c['biking_count'];     //count = biking count
        $business_name = $row_c['business_name'];
    
        //if the biking count is >= the number of rows ..
        if($count >= $row_count){
            $count = 1;    // count = 1;
        }
    

    }
    //otherwise if it is empty, set count to 1
    else{

        $count = 1;
    }



 
    if($conn){
        //fetching current user information
        $query = "select * from users where id=$user_id ";
        $result = mysqli_query($conn, $query) or die ("Unsuccessful Query");
        $row = mysqli_fetch_array($result);
        $bars = $row['bars'];
        $country = $row['country'];


        //counting the number of posts in the current user's country
        $query = "select * from post_test where country = '$country'";
        $count_results = mysqli_query($conn, $query);
        $count_row = mysqli_fetch_array($count_results);
        $posts_in_country = 0;

        if ($result->num_rows > 0){
            while ($count_row = $count_results-> fetch_assoc()){
                $posts_in_country = $posts_in_country + 1;
              
            }
        }
 

        if ($posts_in_country > 5){
            $post_query    = "select * from post_test where id=$count and country = '$country'";
            $post_result   = mysqli_query($conn, $post_query) or die ("Unsuccessful Query");
            $post_row      = mysqli_fetch_array($post_result);
            

        }
        else{
            $post_query    = "select * from post_test where id=$count";
            $post_result   = mysqli_query($conn, $post_query) or die ("Unsuccessful Query");
            $post_row      = mysqli_fetch_array($post_result);
        }
             


        //fetching current post information
        $poster_id     = $post_row['user_id'];
        $post_contact = $post_row['contact'];


       
        //deletion if set view has been exhausted
        $views_left = $post_row['post_max_views'];
        if ($views_left <= 0){
            //getting the id of the current post
            $query = "select id from post_test where id = $count";
            $result = mysqli_query($conn, $query) or die ("Unsuccessful Query");
            $row = mysqli_fetch_array($result);
            $current_id = $row['id']; 

            //delete current post
            $query = "delete from post_test where id = '$count'";
            $execute = mysqli_query($conn, $query) or die ("Unsuccessful Query");


            //reducing the id of any post above the current post by 1
            $start_id = $count + 1;
            for ($i = $start_id; $i <= $row_count; $i++){
                $query = "update post_test set id = $current_id where id = $start_id";
                $execute = mysqli_query($conn, $query) or die ("Unsuccessful Query");
                $current_id++;
                $start_id++;
            }
        }



        $poster_query = "select business_name, phone from users where id = '$poster_id'"; 
        $result_p = mysqli_query($conn, $poster_query) or die ("Unsuccessful Query");
        $row_p = mysqli_fetch_array($result_p);


    

    }
    else{
    }

 
}

//chat query
$id_f_messages = mysqli_real_escape_string($conn, $_GET['id_f_messages']);


$current_user_id = $user_id;
if($id_f_messages != null){
    $other_user_id   = $id_f_messages;

 }
else{
    $other_user_id   = $poster_id;
 
}
?>










 