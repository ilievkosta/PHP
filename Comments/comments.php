
    <h3>Comments :</h3>
   
    <?php 
   
  
    require $_SERVER['DOCUMENT_ROOT']."/conDb.php";
    
    $mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
    
    
    if ($result = mysqli_query($mysqli, "SELECT name,comment from comments order by ID DESC LIMIT 5")) {
    
        while ($row = $result->fetch_assoc()) {
            echo '<font size="3" color="blue" face="Comic sans MS">'.$row["name"].'</font>'.
            " comments: ".'<font size="4" color="red" face="Comic sans MS">'.
            $row["comment"].'</font>';
            echo "<br>";
        }
        /* free result set */
        mysqli_free_result($result);
    }

        ?>
    <br>

