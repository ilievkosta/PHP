<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title haide AAA</title>
        <meta charset="windows-1251">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php

if ($_SESSION['loggedin']) {
	
	echo 'Welcome ' . $_SESSION['name'] . '!';
} else {
	
	header('Location: index.html');
}
?>
        <div>TODO write content</div>
    </body>
</html>
