<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Geo-bg.eu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="style.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    
</head>
<body>
  

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Geo-bg.eu</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
          <li><a href="index.php">Geology</a></li>
          <li><a href="geo.php">Hydrogeology</a></li>
          <li><a href="Contacts.php">Contacts</a></li>
          <li class="active"><a href="News.php">News</a></li>
          <li><?php require('files/IsAdmin.php'); ?></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <?php
                  if (isset($_SESSION['loggedin'])) {
      
            echo '<li><a href="files/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>';
            } else {
          
                  echo '<li><a href="reg.html"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
                  <li><a href="files/loginform.php"><span class="glyphicon glyphicon-log-in"></span> Register </a></li> ';
                }
          ?>
      </ul>
    </div>
  </div>
</nav>
  

<div class= "container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>

    
    <div class="col-sm-8 text-left"> 
    <h1>  </h1>
      <p> <?php include_once('showArticles.php') ?>   </p>
      
      <li></li>
    
</p>
      <hr>
      <h3>   </h1></h3>
      <p> </p>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>Link to Facebook</p>
      </div>
      <div class="well">
        <p>Link to Linkedin</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Kostadin Iliev 2019</p>
</footer>

</body>
</html>
