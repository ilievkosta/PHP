<?php
    $ip=$_SERVER['REMOTE_ADDR'];

    $ipquerry = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
    if($ipquerry && $ipquerry['status'] == 'success')
    {

$city1=$ipquerry['city'] ;
$lat=$ipquerry['lat'];
$lon=$ipquerry['lon'];
$ISP=$ipquerry['isp'];
$content=(file_get_contents('http://ip-api.com/php/'.$ip));
if(isset($_SESSION['name']))
{
    $user=$_SESSION['name'];   
} else {
    $user='unknown';  
}


require $_SERVER['DOCUMENT_ROOT']."/conDb.php";

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO city_ip(city,ip,username,details,lat,lon,isp)
VALUES ('$city1','$ip','$user','$content',$lat,$lon,'$ISP')";

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

?>

