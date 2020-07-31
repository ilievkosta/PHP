
<?php
session_start(); 

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Инженерно геоложки доклади Басейнова дирекция разрешителни подземни води">
  <title>Geo-bg.eu</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
        <a class="navbar-brand" href="index.php">Geo-bg.eu</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Инженерна Геология</a></li>
          <li><a href="hydro.php">Хидрогеология</a></li>
          <li><a href="images/gallery.php">Галерия</a></li>
          <li><a href="Contacts.php">Контакти</a></li>
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
    <h3>Инженерногеоложки Дейности: </h3>
                  <li>Изготвяне на разрешителни за водовземане от подземни води.</li>
                        <li>Проектиране на санитарно – охранителни зони.</li>
                         <li>Изготвяне на оценка на ресурсите на подземните води.</li>
                         <li> Инженерногеоложки проучвания с лабораторни изследвания и 
                        изготвяне на инженерно-геоложки доклади. 
                    Цената е  в зависимост от категорията на сградата и полевите работи.</li>
       
       <li>Полеви инженерно-геоложки изработки – шурфове и сондажи.</li> 
         
        <li>Пробовзимане с цел лабораторни изследвания. </li>
        <li><b>За Контакти: инж. Костадин Илиев тел. 0887508896, 0878883626</b></li>
      <h3>News :</h3>
     <p> <?php include_once('showArticles.php') ?>  </p>
   
      <?php include_once("Comments/comments.php")?>
      <?php if (isset($_SESSION['loggedin'])) {
	         ?>
           <form form class="form-horizontal" action="..\Comments\post_comment.php" method="POST">
             
             
              <textarea name="comment" cols="40" rows="4">Enter a Comment</textarea><br> 
              
                 <input type="text" name="name" value="Your Name" style="text-align:left;" >
                 <br>
                <button type="submit"  value="Comment">Comment</button>
              </form>
              
            <?php }?>

      <p> <?php if(isset($_GET["error"])) {
        echo "<p> 100 character limit";
        }?>
        </p>
      
        </div>

    <div class="col-sm-2 sidenav">
      <h4>Visit us on</h4>
      <div class="well">
      <p><a href="https://web.facebook.com/GeoBg.eu/">Facebook</a></p>
      </div>
      <div class="well">
      <p><a href="https://www.linkedin.com/in/kostadin-iliev-16225345/">LinkedIn</a></p>
      </div>
      <div class="well">
      <!-- weather widget start --><a target="_blank" href="https://www.booked.net/weather/stara-zagora-11315">
          <img src="https://w.bookcdn.com/weather/picture/26_11315_1_1_95a5a6_250_7f8c8d_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=124&domid=w209&anc_id=6731" 
      alt="booked.net"/></a><!-- weather widget end -->
       </div>
      
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Kostadin Iliev 2019.</p>
</footer>

</body>
</html>

<?php
require('files/location.php');
?>
