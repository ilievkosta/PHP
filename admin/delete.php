<?php
session_start();
include_once('../includes/connection.php');
include_once('../includes/article.php');
$article=new Article;
if(isset ($_GET['id'])){
    $id=$_GET['id'];
   
    $query=$pdo->prepare('DELETE FROM articles WHERE article_id=?');
    $query->bindValue(1, $id);
    $query->execute();

    header('Location: delete.php');
}
$articles=$article->fetch_all();
?>

<html>
	<head>
		<title>Geo-bg.eu</title>
		<link rel="stylesheet" href="..\index.php" /> 
	</head>
	<body>
		<div class="container">
<a href="..\index.php" id="logo">Geo-bg.eu</a>

<br />
<h4>Select an Article to delete</h4>
<form action="delete.php" method="get" >


<select name="id">

<?php foreach ($articles as $article){ ?>
<option value="<?php echo $article['article_id']; ?>"><?php echo $article['article_title'] ; ?> </option>
<?php } ?>
</select>
<input type="submit" value="Delete">
</form>

		</div>
	</body>
</html>



