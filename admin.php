<?php session_start();
if ((!isset($_SESSION['loggedin'])) and (!isset($_SESSION['admin'])) ){
  header ('Location: index.php');
                } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Geo-bg.eu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="style.css">

    
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
      <a class="navbar-brand" href="https://www.geo-bg.eu">Geo-bg.eu</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          <li><a href="index.php">Инженерна Геология</a></li>
          <li><a href="hydro.php">Хидрогеология</a></li>
          <li><a href="images/gallery.php">Галерия</a></li>
          <li><a href="Contacts.php">Контакти</a></li>
          <li class="active"><a href="last.php">Admin tools</a></li>
          
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
    <div class="row">
    <div class="col-sm-7">
     <h4>Last visits</h4>
      <form action="files/table.php" method="POST">
      <input type="number" min="1" step="1" name="Count" value=""><br>
      <input type="submit" value="Give me the table">
      </form>
      
       <h4>News</h4>
        <font size="5">
      <p> <a  href="admin/add.php">Add Article</a> <br></p>
      <p><a href="admin/delete.php">Delete Article</a></p> </font>
      
    </div>
    <div class="col-sm-5">
          <h4>Comments</h4>
      <p><form action="Comments\showcomment.php" method="POST">
      <input type="number" min="1" step="1" name="number"><br>
      <input  type="submit" value="Show last comments">
      </form>
      <h4>Delete Comments</h4>
       <form action="Comments\delcomment.php" method="POST">
        <input type="number" min="1" step="1" name="delnumber"><br>
        <input  type="submit" value="Delete comment №">
        </form> </p>
    </div>
   
    </div>
      
     
      
       
      
<form action="../images/upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
<p><font size="5"><a href="images/deletePictures.php">Delete images</a></fon></p>



  <script>
      function getTable(val) {

    fetch("files/tableAJAX.php?Count="+ val).then(res => res.json()).then(parsed =>draw(parsed));
    
 }
    function del() {
        document.getElementById("gable").innerHTML = "";
    }

        function draw(params) {  // Makes a table from JSON
       
                var table = document.getElementById('gable');
                params.forEach(function(object) {
                var tr = document.createElement('tr');
                tr.innerHTML = '<td>' + object.ID + '</td>' +
                '<td>' + object.city + '</td>' +
                '<td>' + object.LOG_DATE + '</td>' +
                '<td>' + object.ip + '</td>' +
                '<td>' + object.username + '</td>';
                table.appendChild(tr);
                });
            }
            

            

            function getTableLast(val) {
    fetch("files/tableAJAX.php?Count="+ val).then(function(response) {
    return response.text();
}).then(function(string) {
    insert(string);
}).catch(function(err) {  
    console.log('Fetch Error', err);  
});
   
 }



        function getTable(val) {
    fetch("files/tableLastDays.php?Count="+ val).then(function(response) {
    return response.text();
}).then(function(string) {
    insert(string);
}).catch(function(err) {  
    console.log('Fetch Error', err);  
});
   
 }
    function insert(data) {
     
        document.getElementById('tag-idd').innerHTML = data;
    }
    
    function delt() {
     
     document.getElementById('tag-idd').innerHTML ="";
 }    
            
            
            
            
  </script> 
 <p><b>Last visits:</b></p>
<form> 
Enter value: <input type="number" onkeyup="getTableLast(this.value)">
</form>
<button onclick="delt()">Clear results</button>
<div>

    
    <br>
</div>

<p><b>Last visits by days:</b></p>
<form> 
Enter days: <input type="number" onkeyup="getTable(this.value)">
</form>
<button onclick="delt()">Clear results</button>

   <div id="tag-idd"></div>


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
  <p>Kostadin Iliev 2019.</p>
</footer>

</body>
</html>



