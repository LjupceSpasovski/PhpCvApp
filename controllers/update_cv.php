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


     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       

        $id = $_POST['id_cv'];
        // check edit
        $firstname = isset($_REQUEST['firstname']) ? $_REQUEST['firstname'] : 'empty';
        $lastname = isset($_REQUEST['lastname']) ? $_REQUEST['lastname'] : 'empty';
        $profesion = isset($_REQUEST['profesion']) ? $_REQUEST['profesion'] : 'empty';
        $profesion_text = isset($_REQUEST['profesion_text']) ? $_REQUEST['profesion_text'] : 'empty';
        $skills = isset($_REQUEST['skills']) ? $_REQUEST['skills'] : 'empty';
        $skills_text = isset($_REQUEST['skills_text']) ? $_REQUEST['skills_text'] : 'empty';
        $experience = isset($_REQUEST['experience']) ? $_REQUEST['experience'] : 'empty';
        $experience_text = isset($_REQUEST['experience_text']) ? $_REQUEST['experience_text'] : 'empty';
        $job_title = isset($_REQUEST['job_title']) ? $_REQUEST['job_title'] : 'empty';
        $job_title_text = isset($_REQUEST['job_title_text']) ? $_REQUEST['job_title_text'] : 'empty';
        $education = isset($_REQUEST['education']) ? $_REQUEST['education'] : 'empty';
        $education_text = isset($_REQUEST['education_text']) ? $_REQUEST['education_text'] : 'empty';
        $references_title = isset($_REQUEST['references_title']) ? $_REQUEST['references_title'] : 'empty';
        $references_text = isset($_REQUEST['references_text']) ? $_REQUEST['references_text'] : 'empty';
     


       
     
     
        $sql ="UPDATE cv SET firstname = '$firstname', lastname = '$lastname', profesion = '$profesion', profesion_text = '$profesion_text', skills = '$skills', skills_text = '$skills_text',
         experience = '$experience', experience_text = '$experience_text', job_title = '$job_title', job_title_text = '$job_title_text', education = '$education', education_text = '$education_text', references_title = '$references_title', references_text = '$references_text'  WHERE id=$id";
        
        if (mysqli_query($connection, $sql)) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . mysqli_error($connection);
          }
          
          mysqli_close($connection);
     
          
          header('Location: http://localhost/cv/user/dashboard.php');
     
     }

  

    
