function validateOnSubmit() {
	var name =
		document.forms.volunteerForm.fullname.value;
	var email =
		document.forms.volunteerForm.emailaddress.value;
	var phone =
		document.forms.volunteerForm.phonenumber.value;
		
	var regName =
		/^[a-zA-Z]+[a-zA-Z]/;
	var regEmail =
		/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var regPhone =
		/^\(?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;

	if (!regName.test(name)) {
		window.alert("Please enter a valid name. \nformat: 'first name' 'last name'");
		name.focus();
		return false;
	}

	if (!regEmail.test(email)) {
		window.alert("Please enter a valid e-mail address. \nformat: name@domail.com");
		email.focus();
		return false;
	}

	if (!regPhone.test(phone)) {
		alert("Please enter a valid phone number. \nformat: xx-xxxx-xxxx");
		phone.focus();
		return false;
	}
	return true;
}
