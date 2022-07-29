<?php 
	
	if (isset($_POST['submit'])) {

		$usernameOrEmail = $_POST['usernameOrEmail'];
		$pwd = $_POST['password'];

		require_once 'functions.inc.php';
		require_once 'openDbConnection.inc.php';

		if (hasEmptyFields($usernameOrEmail, $pwd) !== false) {
			header("location: login.php?error=hasEmptyInput");
			exit();
		}

		loginUser($conn, $usernameOrEmail, $pwd);

	}
