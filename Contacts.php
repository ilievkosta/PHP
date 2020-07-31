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
        
          <li><a href="index.php">Инженерна Геология</a></li>
          <li><a href="hydro.php">Хидрогеология</a></li>
          <li><a href="images/gallery.php">Галерия</a></li>
          <li class="active"><a href="Contacts.php">Контакти</a></li>
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
      <p><a href="https://earbd.bg/">Басейнова Дирекция ИБР Пловдив</a></p>
      <p><a href="https://www.moew.government.bg/">Министерство на околната среда и водите</a></p>
      <p><a href="http://www5.moew.government.bg/?wpfb_dl=17466">ТАРИФА за таксите за водовземане</a></p>
      <p><a href="http://www.kiip.bg">Камара на инженерите в инвестиционното проектиране</a></p>  
    </div>

    
    <div class="col-sm-8 text-left"> 
    <h1>Контакти: </h1>
     </p> <li> инж. Костадин Илиев </li>
        <li> тел. 0887508896 , 0878883626 </li>
        <li> ilievkosta@gmail.com </li>
        <li> гр. Стара Загора </li>
        <div class="LI-profile-badge"  data-version="v1" data-size="medium" 
        data-locale="en_US" data-type="horizontal" data-theme="dark" 
        data-vanity="kostadin-iliev-16225345"><a class="LI-simple-link" 
        href='https://bg.linkedin.com/in/kostadin-iliev-16225345?trk=profile-badge'>
     </div>
    
</p><hr>
      </hr>
        <h3> </h3>
      <p> </p>
    </div>
    <div class="col-sm-2 sidenav">
      <h4>Visit us on</h4>
      <div class="well">
      <p><a href="https://web.facebook.com/GeoBg.eu/">Facebook</a></p>
      </div>
      <div class="well">
      <p><a href="https://www.linkedin.com/in/kostadin-iliev-16225345/">LinkedIn</a></p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Kostadin Iliev 2019</p>
</footer>

</body>
</html>
