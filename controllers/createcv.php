<?php 
 

 $hostname = "localhost";
 $username = "root";
 $password = "";
 $dbname = "cvdb";
 
 $connection = mysqli_connect($hostname, $username, $password, $dbname) or die("Database connection not established.");


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

        $id = $_REQUEST['id_cv'];

       

        $sql1 ="INSERT INTO user_cv (user_id) VALUES ($id)";


        if ($connection->query($sql1) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql1 . "<br>" . $connection->error;
          }


        $sql2="SELECT user_cv.id FROM user_cv WHERE ID = (SELECT MAX(ID) FROM user_cv)";


        $result = mysqli_query($connection, $sql2);
    
        $row = mysqli_fetch_assoc($result);


       $idMax = $row['id'];




        $sql ="INSERT INTO cv (user_cv, firstname, lastname, profesion, profesion_text, skills, skills_text, experience, experience_text, job_title, job_title_text, education, education_text, references_title, references_text) 
        VALUES ( $idMax,'$firstname', '$lastname', '$profesion', '$profesion_text', '$skills', '$skills_text', '$experience', '$experience_text', '$job_title', '$job_title_text', '$education', '$education_text', '$references_title', '$references_text')";

       

if ($connection->query($sql) === TRUE) {
    mysqli_close($connection);
     
          
          header('Location: http://localhost/cv/user/dashboard.php');
  } else {
    mysqli_close($connection);
     
          
          header('Location: http://localhost/cv/user/createcv.php');
  }

        