<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>تسجيل الدخول </title>

		<link rel="stylesheet" type="text/css" href="../styles/global.css">
		<link rel="stylesheet" type="text/css" href="../styles/typography.css">
		<link rel="stylesheet" type="text/css" href="../styles/elements.css">
		<link rel="stylesheet" type="text/css" href="../styles/login_mobile.css">
		<link rel="stylesheet" type="text/css" href="../styles/login_tablet.css">
		<link rel="stylesheet" type="text/css" href="../styles/login_desktop.css">
	</head>
	<body>
		<?php
			require_once 'inc/handleLogin.inc.php';

		?>
		<main>
			<div class="login-container">
				
				<div class="login-image-container">
					<img src="../images/lawfirmStock1.jpg" class="login-image">	
				</div>

				<div class="login-form-container">

					<div class="login-container-a">
						<form action="login.php" class="login-form" method="POST">
							<div class="login-info-text">
								<h2 class="golden-text font-bolder">مرحباً بك مجدداً
								</h2>

								<p class="white-text font-normal "> قم بتسجيل الدخول  لتستفيد من خدماتنا
								</p>
							</div>

							<div class="login-info-input">
								<input type="text" name="usernameOrEmail" placeholder="الايميل او اسم المستخدم
								">
								<div class="password-input-container">
									<input class="login-password-input-field" type="password" name="password" placeholder="كلمة المرور 
									">	
									<span class="password-icons-container">
										<img src="../images/eye.png" class="eye-icon">
										<img src="../images/hidden.png" class="hidden-eye-icon">
									</span>
								</div>
								

								<div class="forgot-password">
									<span>
										<?php  
											if (isset($_GET["error"])) {

												switch ($_GET["error"]) {

													case "hasEmptyInput":
														echo '<p class="white-text">Empty fields</p>';
														break;

													case "incorrectPassword":
														echo '<p class="white-text">Incorrect Password</p>';
														break;
												}
											}
										?>
									</span>
									<a href="resetPass.php" class="font-sm font-normal golden-text">نسيت كلمة المرور؟</a>
								</div>
							</div>

							

							<div class="login-button-container">
								<input name="submit" type="submit" value="تسجيل الدخول
								" class="login-btn font-bold ">
							</div>
						</form>
					</div>

					<div class="login-container-b">
						<div class="alt-login-methods">
							<h3 class="alt-login-methods-title white-text">
								أو قم بالدخول  عبر
							</h3>

							<div class="icons-container">
								<div class="google-icon">
									<img src="../images/googleLogo.png" class="google-logo">
								</div>
								<div class="apple-icon">
									<img src="../images/appleLogo.png" class="apple-logo">
								</div>
								<div class="facebook-icon">
									<img src="../images/facebookLogo.png" class="facebook-logo">
								</div>
							</div>

							<p class="white-text font-thin no-accound-container">
							ليس لديك حساب؟ 
								<span>
								<a href="register.php" class="golden-text create-acc-btn font-bold">انشاء حساب</a>
								</span>
							</p>
				
						</div>	
					</div>

					
				</div>

				
				
			</div>
		</main>
		<script type="text/javascript" src="../scripts/login.js"></script>
	</body>
</html>
