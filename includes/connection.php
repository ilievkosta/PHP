<?php
require $_SERVER['DOCUMENT_ROOT']."/conDb.php";

try{
$pdo= new PDO('mysql:host='.$DB_HOST.';dbname='.$DB_NAME.'',$DB_USER,$DB_PASS);
} catch(PDOException $e) { exit('Database error.'); }


?>