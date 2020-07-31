<?php

require $_SERVER['DOCUMENT_ROOT']."/conDb.php";

$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($mysqli->connect_errno) {

	die ('Failed to connect to MySQL: ' . $mysqli->connect_errno);
}

if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {

	die ('Please complete the registration form!<br><a href="../register.html">Back</a>');
}

if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {

	die ('Please complete the registration form!<br><a href="../register.html">Back</a>');
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	die ('Email is not valid!<br><a href="../register.html">Back</a>');
}

if (preg_match('/[A-Za-z0-9]+/', $_POST['username']) == 0) {
    die ('Username is not valid!<br><a href="../register.html">Back</a>');
}

if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
	die ('Password must be between 5 and 20 characters long.<br><a href="../register.html">Back</a>');
}
  $password1 = $_POST['password'];
  $password12 = $_POST['password2'];
  if($password1 != $password12) die('Passwords do not match<br><a href="../register.html">Back</a>');

if ($stmt = $mysqli->prepare('SELECT id, password FROM accounts WHERE username = ?')) {

	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute(); 
	$stmt->store_result(); 

	if ($stmt->num_rows > 0) {
	
		echo 'Username exists, please choose another!<br><a href="../register.html">Back</a>';
	} else {

		if ($stmt = $mysqli->prepare('INSERT INTO accounts (username, password, email) VALUES (?, ?, ?)')) {
	
			$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
			$stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
			$stmt->execute();
			echo 'You have successfully registered, you can now login!<br><a href="/index.php">Login</a>';
		} else {
			echo 'Could not prepare statement!';
		}
	}
	$stmt->close();
} else {
	echo 'Could not prepare statement!';
}
$mysqli->close();
?>