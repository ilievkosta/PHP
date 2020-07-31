<?php
session_start();
if ((!isset($_SESSION['loggedin'])) and (!isset($_SESSION['admin'])) ){
    header ('Location: ../index.php'); }
  
     ?>            
<style>
img {
  border: 1px solid #ddd; /* Gray border */
  border-radius: 4px;  /* Rounded border */
  padding: 5px; /* Some padding */
  width: 250px; /* Set a small width */
}

/* Add a hover effect (blue shadow) */
img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
</style>

<?php

$files = glob('*.jpg');
if(isset($_GET['file'])){
  
    $file=($_GET['file']);
    if(unlink($file)){
        echo "Deleted";
        header ('location: new.php');
    } else {
        echo "Not deleted";
    };
}

foreach($files as $file) {

    ?>


<a target="_blank" href="<?php echo $file ?>">
  <img src="<?php echo $file ?>" alt="Forest">
  <form action="deletePictures.php" method="get">
<input type="text" name="file" value="<?php echo $file ?>"><br>
<input type="submit"value="Delete" >
</a>
</form>
<?php }?>




