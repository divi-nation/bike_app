<?php require_once "php/session.php";

 
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);

 

//increase user bars
//add one to user_count
//subtract 1 from the post max views

/*---------------- UPDATING USER INFORMATION ----------------------*/
  $user_id = $_SESSION['id'];  //getting user id
  $query = "select * from users where id = '$user_id'"; //selecting everything belonging to that user 
  $result = mysqli_query($conn, $query) or die ("Unsuccessful Query");  //store user details in results
  $row = mysqli_fetch_array($result);

//incrementing bars
    $bars   = $row['bars'] + 3;
    $query  = "update users set `bars` = '$bars' where id = $user_id";
    $result = mysqli_query($conn, $query) or die ("Unsuccessful Query");

//incrementing count 
    $count  = $row['biking_count'] + 1;
    $query  = "update users set `biking_count` = '$count' where id = $user_id";
    $result = mysqli_query($conn, $query) or die ("Unsuccessful Query");




/*---------------- UPDATING POST INFORMATION ----------------------*/
     $post_number = $count - 1; //since count has already been incremented, i subtracted one
     $query = "select * from post_test where id = '$post_number'"; //selecting everything belonging to that post     $result = mysqli_query($conn, $query) or die ("Unsuccessful Query");  store user details in results
     $result = mysqli_query($conn, $query) or die ("Unsuccessful Query");  //store user details in results
     $row = mysqli_fetch_array($result);
     $row_cnt = $result->num_rows;

//reducing post_max_views of the post
      $views  = $row['post_max_views'] - 1;
      if ($views == 0){
      //  $query = "update post_test se";
      }
      $query  = "update post_test set `post_max_views` = '$views' where id = $post_number";
      $result = mysqli_query($conn, $query) or die ("Unsuccessful Query");


//check if count > number of posts
//reset count to 1
      if ($row['biking_count'] == $row_cnt){
        $count = 1;
        $query  = "update users set `biking_count` = '$count' where id = $user_id";
        $result = mysqli_query($conn, $query) or die ("Unsuccessful Query");


      }

     
 //refresh bike thorugh
      header("Location: bikeThrough.php");



       







  /* request current user id
    $user_id = $_SESSION['id'];


    select everything belonging to the user
    $query = "select * from users where id = '$user_id'";
    $result = mysqli_query($conn, $query) or die ("Unsuccessful Query");
    $row = mysqli_fetch_array($result);

    $num_of_posts = $result->num_rows;

    if the number of post = view count
        view count = 1


    couting num of rows in posts to see if user has viewed everything, he will start again
 
      $update_count = $row['biking_count'] + 1;
 

    updating count(to check number of items viewed), and bars
    $update_bars  = $row['bars'] + 1;

 


    selection current post
    $sql = "SELECT * FROM post_test where id = $update_count";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);

    checking the max views set by the user who posted
    $views_left = $row['post_max_views'];

    if it has been viewed up to the set number, skip it
    if ($views_left == 0){
      $update_count = $update_count + 1;
    }

  


 
    
    $query_2 = "update users set `biking_count` = '$update_count' where id = $user_id";
    $query_3 = "update users set `bars` = '$update_bars' where id = $user_id";
    $query_4 = "update post_test set `post_max_views` = '$views_left' where id = $update_count";
    
      otherwise subtract 1 from the max views of the post
      if($views_left != 0){
        $views_left = $views_left - 1;
      }


    $result_2 = mysqli_query($conn, $query_2) or die ("Unsuccessful Query");
    $result_3 = mysqli_query($conn, $query_3) or die ("Unsuccessful Query");
    $result_4 = mysqli_query($conn, $query_4) or die ("Unsuccessful Query");



    header("Location: bikeThrough.php");
    */

   ?> 