<?php
    // Database connection
    include('config/db.php');

    
    
    $sql = "SELECT cv.* FROM user_cv LEFT JOIN cv ON cv.user_cv = user_cv.id WHERE user_cv.user_id={$_SESSION['id']}";
    
    $result = mysqli_query($connection, $sql);
    
    $row = mysqli_fetch_assoc($result);
 
   

    
    
?>