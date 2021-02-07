<?php     
    session_start();
    session_destroy();
      
    header("Location: http://localhost/cv/user/index.php")
;?>