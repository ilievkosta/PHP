<?php

 echo "<table style='width: 100%;
 border: 1px solid #000;'>";

 
$showdates = $_GET['Count'];

if(!is_numeric($showdates)){ 

  echo "Моля въведете цифра .";
  die();
}


require $_SERVER['DOCUMENT_ROOT']."/conDb.php";
$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM city_ip where LOG_DATE BETWEEN now() - interval $showdates day and now() ORDER BY ID DESC";
$result = $conn->query($sql);

if(mysqli_num_rows($result)>0)
{
 echo  " <br><table class='table'>";
 echo "<tr><th>ID</th><th>City</th><th>IP</th><th>Date</th><th>User</th><tr>";
    while($row = mysqli_fetch_array($result)) 
 {

 
 echo '<tr><td>'.$row['id'].'</td><td>'.$row['city'].'</td><td>'.$row['ip'].'</td><td>'.$row['LOG_DATE'].'</td><td>'.$row['username'].'</td></tr>'; 
 }
 echo  " </table>";
}
$conn->close();

?>


