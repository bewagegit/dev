// Validate the password and confirm password fields
function validatePassword() {
	const password = document.getElementById('passwordInput');
	const confirmPassword = document.getElementById('confirmPasswordInput');

	if (password.value !== confirmPassword.value) {
		confirmPassword.setCustomValidity('Passwords do not match');
		confirmPassword.classList.add('is-invalid');
	} else {
		confirmPassword.setCustomValidity('');
		confirmPassword.classList.remove('is-invalid');
	}
}

// Custom validation for phone number input
document.getElementById('phoneNumberInput').addEventListener('input', function () {
	if (this.validity.patternMismatch) {
		this.setCustomValidity('Please enter valid phone number ');
		this.classList.add('is-invalid');
	} else {
		this.setCustomValidity('');
		this.classList.remove('is-invalid');
	}
});

// Additional listener to validate passwords on input
document.getElementById('confirmPasswordInput').addEventListener('input', function () {
	validatePassword();
});


// Function to show/hide form fields based on user type
function showFormFields(userType) {
	// Hide all sections first
	document.querySelectorAll('.form-section').forEach(function (section) {
		section.style.display = 'none';
	});

	// Show the selected user type's section
	if (userType === '1') {
		document.getElementById('candidate').style.display = 'block';
	} else if (userType === '2') {
		document.getElementById('employer').style.display = 'block';
	} else if (userType === '3') {
		document.getElementById('consultancy').style.display = 'block';
	} else if (userType === '4') {
		document.getElementById('freelancer').style.display = 'block';
	}
}