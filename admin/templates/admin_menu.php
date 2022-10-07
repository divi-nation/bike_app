<?php  
//session_start();


/* SUPER ADMININSTRATORS CAN ACCESS 
        ~all admin tabs

    SITE ADMININSTRATORS CAN ACCESS
        ~all admin tabs except the [PERMISSIONS TAB]

    FACILITY ADMININSTRATORS CAN ACCESS
        ~only the [FACILITY TAB]

    USER ADMININSTRATORS CAN ACCESS
        ~the USERS TAB
        ~the MANAGERS TAB
        ~the EMAIL TAB


    The user roles are
        super_admininstrator
        site_admininstrator
        facility_admininstrator
        user_admininstrator

    
*/

 

 
function facility_check(){
    if (isset($_SESSION['user_role'])                 &&
    ($_SESSION['user_role'] == 'super_admininstrator' || 
    $_SESSION['user_role'] == 'site_admininstrator'   || 
    $_SESSION['user_role'] == 'facility_admininstrator') 
    ){
        return true;
    }
    {
        return false;
    }
}

function home_check(){
    if (isset($_SESSION['user_role'])                 &&
    ($_SESSION['user_role'] == 'super_admininstrator'  ||
    $_SESSION['user_role'] == 'site_admininstrator')
    ){
        return true;
    }
    {
        return false;
    }
}


function booking_check(){
    if (isset($_SESSION['user_role'])                 &&
    ($_SESSION['user_role'] == 'super_admininstrator'  ||
    $_SESSION['user_role'] == 'site_admininstrator')   ||
    $_SESSION['user_role'] == 'booking_admininstrator'
    ){
        return true;
    }
    {
        return false;
    }
}




function users_check(){
    if (isset($_SESSION['user_role'])                 &&
    ($_SESSION['user_role'] == 'super_admininstrator'  ||
    $_SESSION['user_role'] == 'site_admininstrator')   ||
    $_SESSION['user_role'] == 'user_admininstrator'
    ){
        return true;
    }
    {
        return false;
    }
}



function permissions_check(){
    if (isset($_SESSION['user_role'])                 &&
     $_SESSION['user_role'] == 'super_admininstrator'
     ){
        return true;
    }
    {
        return false;
    }
}





?>
<div class = 'menu'>


<?php 
     echo "
    <div class = 'menu-item flex-row ' onclick = 'location.href = \"index.php\";'>
        <div class = 'icon'><i class = 'bi bi-house-door'></i></div>
        <div class = 'item'>Home</div>
    </div>
    
    ";
 ?>


 
 


<?php 

         echo "
            
       

            <div class = 'menu-item flex-row ' onclick = 'location.href = \"users.php\";'>
                <div class = 'icon'><i class='bi bi-clipboard2-check'></i></div>
                <div class = 'item'>Users</div>
            </div>
    ";
 
?>




<?php 

         echo "
            
       

            <div class = 'menu-item flex-row ' onclick = 'location.href = \"posts.php\";'>
                <div class = 'icon'><i class='bi bi-clipboard2-check'></i></div>
                <div class = 'item'>Posts</div>
            </div>
    ";
 
?>


 










<div class = 'menu-item flex-row ' onclick = 'location.href = "booking.php";'>
    <div class = 'icon'><i class = 'bi bi-box-arrow-left'></i></div>
    <div class = 'item'>Exit</div>
</div>

</div>

