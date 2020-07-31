<?php


if(empty($_POST['Count'])) {
  
    header('Location: /admin.php');
  
 }
 else {
 echo "<table style='border: solid 1px black;'>";
 function get_numeric($val) { 
    if (is_numeric($val)) { 
      return $val + 0; 
    } 
    header('Location: /last.php'); 
  } 
 
$int = filter_input(INPUT_POST, 'Count', FILTER_VALIDATE_INT);
get_numeric($int);
echo "<br><h1>Result for the last ".$int." visits :<br></h1>";
require $_SERVER['DOCUMENT_ROOT']."/conDb.php";
$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM city_ip ORDER BY ID DESC LIMIT $int";

$result = $conn->query($sql);
echo "<style> table, th, td {
  border: 1px solid black;
} </style>";
if(mysqli_num_rows($result)>0)
{
 echo  " <table>";
 echo "<tr><th>Customer ID</th><th>City of logging</th><th>IP</th><th>Date of logging</th><th>Username</th><th>ISP</th><tr>";
    while($row = mysqli_fetch_array($result)) 
 {
    echo '<tr><td>'.$row['ID'].'</td><td>'.$row['city'].'</td><td>'.$row['ip'].'</td><td>'.$row['LOG_DATE'].'</td><td>'.$row['username'].'</td>.<td>'.$row['isp'].'</td></tr>'; 
 }
 echo  " </table>";
}
$conn->close();
}
?>

<input type="button" value="Back" onclick="window.history.back()" />
