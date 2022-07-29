<?php  

	require_once 'functions.inc.php';

	if (is_post_request()) {

		$selectorToken = bin2hex(random_bytes(8));
		$validator = random_bytes(32);

		$url = "www.alphaLF.com/create-new-password.php?selectorToken=" . $selectorToken . "&validatorToken=" . bin2hex($validator);

		//30 minutes = 1800 seconds
		$expires = date("U") + 1800;

		require_once 'openDbConnection.inc.php';

		$userEmail = $_POST['email'];




		//MAKING SURE THERE'S NO EXISTING TOKENS FROM THIS USER ALREADY IN THE DATABASE ---------------
		$sql = "DELETE FROM pwdReset WHERE pwdReset_email = ?";
	    $stmt = mysqli_stmt_init($conn);

	    if ( ! mysqli_stmt_prepare($stmt, $sql) ) {
	        echo 'error: something went wrong while handling the reset-password tokens';
	        exit();
	    }

	    mysqli_stmt_bind_param($stmt, "s", $userEmail);

	    mysqli_stmt_execute($stmt);
	    mysqli_stmt_close( $stmt );
	    






	    //CREATING A TOKEN FOR THE USER IN THE DATABASE ---------------------------------------------
	    $sql = "INSERT INTO pwdReset (pwdReset_email, pwdReset_selector, pwdReset_token, pwdReset_expires) VALUES (?, ?, ?, ?)";
	     $stmt = mysqli_stmt_init($conn);

	    if ( ! mysqli_stmt_prepare($stmt, $sql) ) {
	        echo 'error: something went wrong while handling the reset password tokens';
	        exit();
	    }

	    $hashedToken = password_hash($validator, PASSWORD_DEFAULT);

	    mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selectorToken, $hashedToken, $expires);

	    mysqli_stmt_execute($stmt);
	    mysqli_stmt_close( $stmt );

		require_once 'closeDbConnection';





		//the content of the email we want to send to the user -----------------------------------------
		$to = $userEmail;
		$subject = 'Reset your password for AlphaLF';
		$message = '<p>We recieved a password reset request, the link to reset your password is below, if you did not make this request please ignore this email<br>here\'s your password reset link:<br><a href="' . $url .'">'.$url.'</a></p>';
		$headers = "From: AlphaLF <alphalf@gmail.com>\r\nReply-To: alphalf@gmail.com\r\n";

		//this is what allows the previous html tags to be displayed inside the email, doesn't work without it
		$headers .= "Content-Type: text/html\r\n";

		mail($to, $subject, $message, $headers);

		header("location: ../create-new-password.php");
		exit();





	} else {
		//if he tries to access the page directly without clicking on the reset password button
		header("location: ../../index.php");
	}