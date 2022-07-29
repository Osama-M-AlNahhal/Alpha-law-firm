<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>تسجيل الدخول </title>

		<link rel="stylesheet" type="text/css" href="../styles/global.css">
		<link rel="stylesheet" type="text/css" href="../styles/typography.css">
		<link rel="stylesheet" type="text/css" href="../styles/elements.css">
		<link rel="stylesheet" type="text/css" href="../styles/register_mobile.css">
		<link rel="stylesheet" type="text/css" href="../styles/register_tablet.css">
		<link rel="stylesheet" type="text/css" href="../styles/register_desktop.css">
	</head>
	<body>
		<?php
			require_once 'inc/handleRegistration.inc.php' ;
		?>
		<main>
			<div class="page-container">
				<div class="card-container">
					<div class="form-side-container">
						<h2 class="font-bold white-text">
							قم بانشاء 
							<span class="golden-text font-bolder">حساب جديد
							</span>
							الآن
						</h2>
						<p class="white-text font-normal">
							لن تستغرق  العملية اكثر من 30 ثانية
						</p>

						<?php
									if (isset($_GET["error"])) {
										echo '<br>';

										switch ($_GET["error"]) {

											case "hasEmptyInput":
												echo '<p class="white-text">Empty fields</p>';
												break;

											case "hasInvalidUsername":
												echo '<p class="white-text">Invalid Username</p>';
												break;

											case "hasInvalidEmail":
												echo '<p class="white-text">Invalid Email</p>';
												break;

											case "hasInvalidPhone":
												echo '<p class="white-text">Invalid Phone number</p>';
												break;

											case "hasInvalidPassword":
												echo '<p class="white-text">Invalid password</p>';
												break;

											case "hasUnmatchingPassword":
												echo '<p class="white-text">password doesn\'t match</p>';
												break;

											case "usernameAlreadyExists":
												echo '<p class="white-text">Username already Exists</p>';
												break;

											case "didntAgreeToTerms":
												echo '<p class="white-text">Must agree to terms </p>';
												break;
										}
										echo '<br>';
									}
								?>

						<div class="form-container">
							<form action="register.php" method="POST" class="registration-form">
								<div class="field">
									<label for="email" class="white-text">االايميل
									</label>
									<input type="text" name="email" id="email" placeholder=" الايميل  ">
								</div>
								
								<div class="double-fields hide-in-mobile">

									<div class="field">
										<label for="first-name" class="white-text">الاسم الاول
										</label>
										<input type="text" name="firstName" id="first-name" placeholder="الاسم الاول">
									</div>
										
									<div class="field">
										<label for="last-name" class="white-text">اسم العائلة
										</label>
										<input type="text" name="lastName" id="last-name" placeholder=" اسم العائلة  ">
									</div>
										
								</div>

								<div class="field for-mobile-only">
									<label for="username" class="white-text">اسم المستخدم
									</label>
									<input type="text" name="username" id="username" placeholder="اسم المستخدم
									">
								</div>
								
								<div class="field">
									<label for="nickname" class="white-text">اللقب/الكنية
									</label>
									<input type="text" name="nickname" id="nickname" placeholder=" اللقب/الكنية ">
								</div>
								

								<div class="double-fields">
									<div class="field">
										<label for="password" class="white-text">كلمة المرور
										</label>
										<input type="password" name="password" id="password" placeholder="كلمة المرور">
									</div>
										

									<div class="field">
										<label for="rePassword" class="white-text">تأكيد كلمة المرور
										</label>
										<input type="password" name="rePassword" id="rePassword" placeholder=" تأكيد كلمة المرور ">	
									</div>
									
								</div>

								<div class="field">
									<label for="mobile" class="white-text">رقم الهاتف
									</label>
									<input type="text" name="mobile" id="mobile" placeholder="رقم الهاتف">	
								</div>

								<div class="field">
									<label for="address" class="white-text">العنوان
									</label>
									<input type="text" name="address" id="address" placeholder=" العنوان  ">
								</div>
								

								<div class="terms-and-submit-container">
									<div class="terms-and-conditions-container">
										<label for="policy-agreement" class="white-text" id="policy-label">
											أوافق على 
											<a href="termsAndConditions.php">
												شروط وسياسات الخدمة
											</a>
										</label>
										<input type="hidden" name="agreedToTerms" value="didntAgree" id="policy-agreement">
										<input type="checkbox" name="agreedToTerms" value="agreed" id="policy-agreement">
									</div>

									<div class="register-button-container">
										<input type="submit" value="انشاء حساب
										" class=" font-bold " id="register-btn">
									</div>
								</div>

							</form>
						</div>

					</div>

					<div class="info-side-container">
						


					</div>
				</div>
			</div>
		</main>
		<script type="text/javascript" src="../scripts/register.js"></script>
	</body>
</html>
