<?php
session_start();
// session_destroy();

require 'data.php'; // $admin
require 'function.php'; // loginStatus1, loginStatus2

// Normalisasi login
if (isset($_POST['login'])) {
	// POST dari form
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Cek admin atau bukan
	if ($username == $admin['username'] && $password == $admin['password']) {
		directAdmin();
	}

	if (!empty($_SESSION['account'])) {
		foreach ($_SESSION['account'] as $value) {
			if ($value['username'] == $username
				|| $value['password'] == $password) {
				$_SESSION['login'] = $value;
			}
		}

		if (!empty($_SESSION['login'])) {
			if ($_SESSION['login']['username'] == $username
				&& $_SESSION['login']['password'] == $password) {
				directQuestion();
			} else {
				unset($_SESSION['login']);
				loginStatus();
			}

		} else {
			unset($_SESSION['login']);
			loginStatus();
		}

	} else {
		loginStatus();
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="css/login.css">
		<!-- Font -->
		<link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
		<!-- Meta -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">		
	</head>

	<body>
		<div class="login-form">
			<!-- Form login -->
			<form method="POST">
				<p><input type="text" name="username" placeholder="Username" required></p>
				<p><input type="password" name="password" placeholder="Password" required></p>
				<button name="login"> Masuk </button>
				<p align="center">Belum punya akun? <a href="register.php">Daftar</a></p>
			</form>
		</div>	
	</body>
</html>