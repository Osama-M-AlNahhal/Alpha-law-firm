<?php 

	require_once 'functions.inc.php';
	require_once 'openDbConnection.inc.php';


	if(is_post_request()) {
		$email = $_POST['email'];
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$username = $_POST['username'];
		$nickname = $_POST['nickname'];
		$password = $_POST['password'];
		$rePassword = $_POST['rePassword'];
		$phone = $_POST['mobile'];
		$address = $_POST['address'];
		$agreedToTerms = $_POST['agreedToTerms'];


		// handling any errors in the form before submitting to the database

		if (hasEmptyInput($firstName, $lastName, $username, $email, $password, $rePassword, $phone, $address) !== false) {
			header("location: register.php?error=hasEmptyInput");
			exit();
		}

		if (hasInvalidUsername($username) !== false) {
			header("location: register.php?error=hasInvalidUsername");
			exit();
		}

		if (hasInvalidEmail($email) !== false) {
			header("location: register.php?error=hasInvalidEmail");
			exit();
		}

		if (hasInvalidPhone($phone) !== false) {
			header("location: register.php?error=hasInvalidPhone");
			exit();
		}

		if (hasUnmatchingPassword($password, $rePassword) !== false) {
			header("location: register.php?error=hasUnmatchingPassword");
			exit();
		}

		if (userAlreadyExists($conn, $username, $username) !== false) {
			header("location: register.php?error=usernameAlreadyExists");
			exit();
		}

		if(!isset($agreedToTerms) OR $agreedToTerms !== "agreed") {
			header("location: register.php?error=didntAgreeToTerms");
			exit();
		}

		createNewUser($conn, $firstName, $lastName, $username, $email, $password, $rePassword, $phone, $address);





	} else {
		// echo "error in registration handling";
	}
	
	require_once 'closeDbConnection.inc.php';