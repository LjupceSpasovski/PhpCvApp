<?php include('config/db.php');
include('controllers/editcv.php');
include('controllers/dashboard.php');

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

<nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
    <div class="container">
        <a class="navbar-brand" href="#">CV</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02"
            aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">CV</a>
                
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container-fluid">


<div class="container">



<div class="row">
    <!-- left side -->

    <form action="controllers/createcv.php" class="w-100"  method="POST">

            <div class="col-xl-12 d-flex px-3" >

           
                <div class="col-xl-5 col-lg-5 col-md-6 col-12">
                    <div class="top-holder">
                        <img src="upload/avatar.png" class="img-thumbnail"> 
                    </div>
                    <input type="hidden" name="id_cv" id="id_cv" value="<?php echo $_SESSION['id']; ?>">

                    <div class="form-group">
                        <label for="first_name" class="form-label">Create First Name</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" value="">
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="form-label">Create Last Name</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" value="">
                    </div>
                    <div class="form-group">  
                        <label for="profesion" class="form-label">Create proffesion title</label>

                        <input type="text" class="form-control" id="profesion" name="profesion" value="">
                    </div>
                    <div class="form-group">   
                        <label for="profesion_text" class="form-label">Create proffesion</label>
                        <input type="text" class="form-control" id="profesion_text" name="profesion_text" value="">
                    </div>
                    <div class="form-group">
                        <label for="skills" class="form-label">Create Skills title</label>
                        <input type="text" class="form-control" id="skills" name="skills" value="">
                    </div>
                    <div class="form-group">
                        <label for="skills_text" class="form-label">Create Skills </label>
                        <input type="text" class="form-control" id="skills_text" name="skills_text" value="">
                    </div>
                    
                </div>     

        
        <!-- vertical line -->
        
            <!-- right side -->
            <div class="col-xl-7 col-lg-7 col-md-6 col-12 float-right justify-content-top" style="border-left:1px solid red;">
                <ul style="list-style-type: none;">
                    <div class="form-group">
                        <label for="experience" class="form-label">Create experience </label>
                        <input type="text" class="form-control" id="experience" name="experience" value="">
                    </div>
                    <div class="form-group d-flex flex-column">
                        <label for="experience_text" class="form-label">Create experience text </label>
                        <textarea name="experience_text" id="" cols="30" rows="10"></textarea>
                       
                    </div>
                    <div class="form-group">
                        <label for="job_title" class="form-label">Create job title </label>
                        <input type="text" class="form-control" id="job_title" name="job_title" value="">
                    </div>
                    <div class="form-group d-flex flex-column">
                        <label for="job_title_text" class="form-label">Create job text </label>
                        <textarea name="job_title_text" id="" cols="30" rows="10"></textarea>
                        
                    </div>
                    <div class="form-group">
                        <label for="education" class="form-label">Create education title </label>
                        <input type="text" class="form-control" id="education" name="education" value="">
                    </div>
                    <div class="form-group d-flex flex-column">
                        <label for="education_text" class="form-label">Create education text </label>
                        <textarea name="education_text" id="" cols="30" rows="10"></textarea>
                
                    </div>
                    <div class="form-group">
                        <label for="references_title" class="form-label">Create references title </label>
                        <input type="text" class="form-control" id="references_title" name="references_title" value="">
                    </div>
                    <div class="form-group d-flex flex-column">
                        <label for="references_text" class="form-label">Create references text </label>
                        <textarea name="references_text" id="" cols="30" rows="10"></textarea>
                       
                    </div>  
                    
                    </li>
                </ul>
            </div>

        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-12 ">
            <div class="col-sm py-4 text-right">
                <input type="submit" class="btn btn-md btn-primary">
            </div>
            
        </div>
        
    </form>

</div>         
    
          
</div>
</div>
</body>

</html>