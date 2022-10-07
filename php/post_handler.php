<?php require_once "session.php";


//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
//
 

   $user_id           = $_SESSION['id'];
   $post_title        = $_POST['post_title'];
   $post_description  = $_POST['post_description'];
   $post_price        = $_POST['post_price'];
   $post_max_views    = $_POST['post_max_views'];
   $country           = $_POST ['country'];
   $region            = $_POST ['region'];
   $contact           = $_POST ['contact'];

   if ($post_max_views > $row['bars']) {
      echo "<script>alert('Max view entered is more that your number of bars, view more items in the BIKE TROUGH section to get more Bars')</script>";
 
      header("refresh:1; url=../post.html");


   }

   else{


 

      
      $conn = new mysqli("localhost", "root", "", "bike_app");

      if ($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{    
        //image 

    // uploading image 1

        $file_name = time().basename($_FILES['post_image_1']['name']);
        $target = "images/".$file_name;

        $post_image_1 = $file_name;
        // $sql = "insert into post_test (`post_image_1`) values ('$image') where id = '$user_id'";
        // mysqli_query($conn, $sql);

        if(move_uploaded_file($_FILES['post_image_1']['tmp_name'], $target)){
          $msg = "image uploaded successfully";
        }
        else{
          $msg = "There was a problem uploading image";
        }


    // uploading image 2
        $file_name = time().basename($_FILES['post_image_2']['name']);
        $target = "images/".$file_name;

        $post_image_2 = $file_name;
        

        if(move_uploaded_file($_FILES['post_image_2']['tmp_name'], $target)){
          $msg = "image uploaded successfully";
        }
        else{
          $msg = "There was a problem uploading image";
        }


           $stmt = $conn->prepare("insert into post_test (`id`, `user_id`, `post_title`, `post_description`, `post_price`, `post_max_views`, `post_image_1`, `post_image_2`, `country`, `region`, `contact`) 
          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

          $stmt->bind_param("issssssssss", $row_count, $user_id, $post_title, $post_description, $post_price, $post_max_views, $post_image_1, $post_image_2, $country, $region, $contact);
    
          $stmt->execute();
          
          $bars = $bars - $post_max_views;
          $query = "update users set bars = $bars where id = '$user_id'";
          $execute = mysqli_query($conn, $query) or die ("Unsuccessfull Query");


          if ($stmt){    
            echo "<script type='text/javascript'> alert('POSTED !') </script>";
          }

          else{
            echo "<script type='text/javascript'> alert('POST NOT SENT, TRY AGAIN')  </script>";
          }

          header("refresh:1; url= ../homepage.php");


 
        

    }

  }
    
?>