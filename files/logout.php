<?php
session_start();
unset($_SESSION["name"]);  
unset($_SESSION["loggedin"]);
header("Location: /index.php");