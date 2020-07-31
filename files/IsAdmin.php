<?php

if (isset($_SESSION['loggedin']) and $_SESSION['name']==='admin'){
    echo '<a href="admin.php">Admin tools</a>';
}


