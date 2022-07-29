function togglePassword() {
	let passwordInput = document.querySelector('.login-password-input-field');
	let eyeIcon = document.querySelector('.eye-icon');
	let hiddenEyeIcon = document.querySelector('.hidden-eye-icon');

	if (passwordInput.type === "password") {
		passwordInput.type = "text";
		eyeIcon.style.display = "inline-block";
		hiddenEyeIcon.style.display = "none";		
	} else {
		passwordInput.type = "password";
		eyeIcon.style.display = "none";
		hiddenEyeIcon.style.display = "inline-block";		
	}
}

let passwordIcons = document.querySelector('.password-icons-container');
passwordIcons.addEventListener('click', togglePassword);