<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>اعادة تعيين كلمة المرور
	</title>
	<link rel="stylesheet" type="text/css" href="../styles/global.css">
	<link rel="stylesheet" type="text/css" href="../styles/typography.css">
	<link rel="stylesheet" type="text/css" href="../styles/elements.css">
	<link rel="stylesheet" type="text/css" href="../styles/resetPass_mobile.css">
	<link rel="stylesheet" type="text/css" href="../styles/resetPass_tablet.css">
	<link rel="stylesheet" type="text/css" href="../styles/resetPass_desktop.css">
</head>
<body>
	<main>
		<div class="reset-container">

			<div class="reset-form-container">

				<div class="reset-container">

					<form action="inc/handleReset.inc.php" class="reset-form" method="POST">

						<div class="back-btn-container">
							<a href="login.php" class="back-btn">
								<img src="../images/right-arrow.png" class="back-image">
							</a>
						</div>

						<div class="reset-info-text">
							<h2 class="golden-text font-bolder">اعادة تعيين كلمة المرور
							</h2>

							<p class="white-text font-normal ">قم بادخال كلمة المرور الجديدة
							</p>
						</div>

						<div class="reset-info-input">
							<input type="text" name="email" placeholder="كلمة المرور الجديدة
							">
							<input type="text" name="email" placeholder="اعد ادخال كلمة المرور
							">
						</div>

						

						<div class="reset-button-container">
							<input name="submit" type="submit" value="اعادة تعيين كلمة المرور
							" class="reset-btn font-bold ">
						</div>

						<?php 

						if (isset($_GET['reset'])) {
							if ($_GET['reset'] == "success") {
								echo '<p class="success-message"> Check your email! </p>';
							}
						}
						?>
					</form>
				</div>
			</div>

		</div>
	</main>
</body>
</html>