<?php
session_start();
// session_destroy();

require 'function.php';

// Check session
if (!empty($_SESSION['account'])) {
	$account = $_SESSION['account'];
} else {
	$account = [];
}

// Normalisasi register
if (isset($_POST['register'])) {
	// POST form
	$username = $_POST['username'];
	$email 	  = $_POST['email'];
	$password = $_POST['password'];
	// Anti ganda
	$check = array_column($account, 'username');

	if (in_array($username, $check)) {
		registerStatus1();
	} else {
		addAccount($username, $email, $password);
		registerStatus2();
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Registrasi</title>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="css/register.css">
		<!-- Font -->
		<link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
		<!-- Meta -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

	<body>
		<div class="register-form">
			<!-- Form register -->
			<form method="POST">
				<p><input type="text" name="username" placeholder="Username" required></p>
				<p><input type="email" name="email" placeholder="Email" required></p>
				<p><input type="password" name="password" placeholder="Password" required></p>
				<button name="register"> Daftar </button>
				<p align="center">Sudah punya akun? <a href="index.php">Masuk</a></p>
			</form>
		</div>		
	</body>
</html>