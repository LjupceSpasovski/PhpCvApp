<?php
    
     // Enable us to use Headers
     ob_start();

     // Set sessions
     if(!isset($_SESSION)) {
         session_start();
     }
 
     $hostname = "localhost";
     $username = "root";
     $password = "";
     $dbname = "cvdb";
     
     $connection = mysqli_connect($hostname, $username, $password, $dbname) or die("Database connection not established.");
  
     
    
                  
    
    

    $sql = "SELECT cv.* FROM user_cv LEFT JOIN cv ON cv.user_cv = user_cv.id WHERE user_cv.user_id='{$_SESSION['id']}'";
    
    $result = mysqli_query($connection, $sql);
    
    $row = mysqli_fetch_assoc($result);

    $sql1 = "SELECT * FROM users WHERE id='{$_SESSION['id']}'";
    $result1 = mysqli_query($connection, $sql1);
    $row1 = $result1->fetch_assoc();
    //  check CV
    $check;
    if ($result->num_rows > 0) {
        // output data of each row
        $check = 1;
      } else {
        $check =0;
      }
      

    

    
    
?>