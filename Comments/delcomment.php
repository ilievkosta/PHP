<?php 
    require '../files/conDb.php';

    $delcomment=$_POST["delnumber"];
   

    
    $mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
    $_delcomment = mysqli_real_escape_string($mysqli,$delcomment);
    if ($result = mysqli_query($mysqli, "DELETE from comments where id='$_delcomment'")) {
     
       echo $delcomment." deleted !";
        } 
    
    


 
    
    ?>