<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="showcomment.php" method="POST">
<input type="number" min="1" name="number"><br>
<input  type="submit" value="Show last comments">
</form>

<p></p>
<form action="delcomment.php" method="POST">
<input type="delnumber" min="1" name="delnumber"><br>
<input  type="submit" value="Delete comment №">
</form>


</body>
</html>
