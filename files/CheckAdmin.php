<?php
session_start();
echo $_SESSION['name'];

if(($_SESSION['loggedin'] = TRUE) and ($_SESSION['name']='admin')){
 echo 'Heloo Admin';
}
else {
  echo 'Who are you?';
}
//&&($_SESSION['name']='admin'){

?>
