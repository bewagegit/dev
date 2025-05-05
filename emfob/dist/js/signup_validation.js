// Validate the password and confirm password fields
function validatePassword() {
	const passwordinp = document.getElementById('password');
	const confirmPassword = document.getElementById('confirmPassword');
	const confirmPasswordError = document.getElementById('confirmPasswordError');
	
	confirmPasswordError.innerHTML = '';
	confirmPasswordError.style = 'display:none';

	if (passwordinp.value != confirmPassword.value) {
		confirmPasswordError.innerHTML = 'Passwords do not match';
		confirmPasswordError.style = 'display:block;color:red';
	}
}

// Custom validation for phone number input
document.getElementById('phoneNumberInput').addEventListener('input', function () {
	document.getElementById('confirmPasswordInputError').innerHTML = '';
	document.getElementById('confirmPasswordInputError').style = '';
	if (this.validity.patternMismatch) {
		document.getElementById('confirmPasswordInputError').innerHTML = 'Please enter valid phone number';
		document.getElementById('confirmPasswordInputError').style = 'display:block;color:red';
	}
});

// Additional listener to validate passwords on input
document.getElementById('confirmPassword').addEventListener('input', function () {
	validatePassword();
	return false;
});


// Function to show/hide form fields based on user type
function showFormFields(userType) {
	// Hide all sections first
	document.querySelectorAll('.form-section').forEach(function (section) {
		section.style.display = 'none';
	});

	// Show the selected user type's section
	if (userType == '1') {
		document.getElementById('candidate').style.display = 'block';
	} else if (userType == '2') {
		document.getElementById('employer').style.display = 'block';
	} else if (userType == '3') {
		document.getElementById('consultancy').style.display = 'block';
	} else if (userType == '4') {
		document.getElementById('freelancer').style.display = 'block';
	}
}

//validating the user is agreed the terms and conditions
function chkValidateForm(){
	validatePassword();
	var userType = document.getElementById('userType').value;
	
	document.getElementById("emailInputError").style = "display:none";
	document.getElementById("emailInputError").innerHTML = "";
			
	document.getElementById('termsAndConditionsTxt').innerHTML = '';
	document.getElementById('termsAndConditionsTxt').style = '';
	if (document.getElementById('flexCheckDefault').checked == false) {
		document.getElementById('termsAndConditionsTxt').innerHTML = 'Please agree terms and conditions';
		document.getElementById('termsAndConditionsTxt').style = 'display:block;color:red';
		return false;
	}
	
	if(userType == 2 || userType == 3){
		return validateEmail();
	}
	
	return true;
}

//validate the email form company emails only
function validateEmail() {
  const email = document.getElementById("email").value;
  const message = document.getElementById("emailInputError");
  
  // Domains to exclude (case-insensitive)
  const blockedDomains = ["gmail.com", "yahoo.com","ymail.com","outlook.com","hotmail.com","live.com","aol.com", "msn.com","protonmail.com","zoho.com","icloud.com","me.com","mac.com","gmx.com","mail.com","tutanota.com","yandex.com","fastmail.com"];

  const domain = email.split("@")[1].toLowerCase();

  if (blockedDomains.indexOf(domain) !== -1 ) {
		var domainKey = blockedDomains.indexOf(domain);
		document.getElementById("emailInputError").style = "display:block;color:red";
		document.getElementById("emailInputError").innerHTML = 'Company and Consultancy Emails from '+blockedDomains[domainKey]+' are not allowed.';
		return false;
  } 
  else{
		document.getElementById("emailInputError").style = "display:none";
		document.getElementById("emailInputError").innerHTML = "";
		return true;
  }
  
}