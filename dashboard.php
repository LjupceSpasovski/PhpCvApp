<?php include('config/db.php');
include('controllers/dashboard.php');
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

 // Error & success messages
 global $success_msg, $email_exist, $f_NameErr, $l_NameErr, $_emailErr, $_mobileErr, $_passwordErr;
 global $fNameEmptyErr, $lNameEmptyErr, $emailEmptyErr, $mobileEmptyErr, $passwordEmptyErr, $email_verify_err, $email_verify_succes0s; 
 
 // Set empty form vars for validation mapping
 $_first_name = $_last_name = $_email = $_mobile_number = $_password = "";

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>CV</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-2 ">
    <div class="container">
        <a class="navbar-brand" href="#">CV</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02"
            aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                    <a class="nav-link" href="users.php">CV list</a>
                </li>
                <?php if($check === 1):?>
                    <li class="nav-item">
                    <a class="nav-link" href="editcv.php">Edit CV</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                    <a class="nav-link" href="createcv.php">Create Cv</a>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

<div class="container-fluid">
<div class="row">
    <?php if($check === 1):?>
    <!-- left side -->
    <div class="col-xl-5 col-lg-5 col-md-6 col-12">
        <div class="top-holder d-flex ">
            <img src="upload/avatar.png" class="img-thumbnail rounded d-block float-right" style="margin-left:40px; margin-top:50px; width: 250px; height: 250px"> 
        </div> </br>

        <ul style="list-style-type: none;">
            <li class="d-flex flex-column pb-4">
                <span>Firstname</span>
                <span class="font-weight-bold"><?php echo $row['firstname'];?> </br></span>
                <span>Lastname</span>
                <span class="font-weight-bold"><?php echo $row['lastname'];?></span>
            </li></br></br>
            <li class="d-flex flex-column pb-4">
                <span class="font-weight-bold"><?php echo $row['profesion'];?></span>
                <span><?php echo $row['profesion_text'];?></span>
            </li></br></br>
            <li class="d-flex flex-column pb-4">
                <span class="font-weight-bold">E-mail</span>
                <span><?php echo $row1['email'];?></span>
            </li></br></br>
            <li class="d-flex flex-column pb-4">
                <span class="font-weight-bold"><?php echo $row['skills'];?></span>
                <span class=" text-wrap" ><?php echo $row['skills_text'];?></span>                
            </li>
            
        </ul>

    </div>
    
    <!-- right side -->
    <div class="col-xl-7 col-lg-7 col-md-6 col-12 float-right justify-content-top mt-5" style="border-left:1px solid red;">
        <ul style="list-style-type: none;">
            <li class="d-flex flex-column pb-4">
                <span class="font-weight-bold"><?php echo $row['experience'];?></span>
                <span class=" text-wrap" ><?php echo $row['experience_text'];?></span> 
            </li>
            <li class="d-flex flex-column pb-4">
                <span class="font-weight-bold"><?php echo $row['job_title'];?></span>
                <span class=" text-wrap" ><?php echo $row['job_title_text'];?></span> 
            </li>
            <li class="d-flex flex-column pb-4">
                <span class="font-weight-bold"><?php echo $row['education'];?></span>
                <span class=" text-wrap" ><?php echo $row['education_text'];?></span> 
            </li >
            <li class="d-flex flex-column pb-4" >
                <span class="font-weight-bold"><?php echo $row['references_title'];?></span>
                <span class=" text-wrap" ><?php echo $row['references_text'];?></span> 
            </li>
           
        </ul>
    </div>
    <?php else:?>
       <h1>There is no cv for this user,
           go to Create CV tab to create the new one
       </h1>

    <?php endif; ?>

</div> 

</div>
</div>
        
    
          

</body>

</html>