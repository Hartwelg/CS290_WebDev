function submit(form)
{	
	var user = form.userName.value;
	var pass = form.password.value;
	var otherPass = form.confirmPassword.value;
	var email = form.email.value;
	var isOK = true;
	
	if (!userValidate(user))
	{
		alert("invalid username");
		isOK = false;
	}
	if (!passwordValidate(pass, otherPass))
	{
		alert("Problem with password");
		isOK = false;
	}
	if (!emailValidate(email))
	{
		alert("Invalid email");
		isOK = false;
	}
	if (isOK)
	{
		alert("Thank you");
		return true;
	}
	else
	{
		return false;
	}
}
function userValidate(name)
{
	if (name.length === 0)
	{
		return false;
	}
	else
	{
		var temp = name.search(/^[-'\w\s]+$/);
		if (temp == 0)
			return true;
		else
			return false;
	}
}
function passwordValidate(thePass, confirmPass)
{
	if (thePass.length === 0 || confirmPass.length === 0)
	{
		if (confirmPass === thePass)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
function emailValidate(address)
{
	var p = address.search(/.+@.+/);
	if (p == 0)
	{
		return true;
	}
	else
	{
		return false;
	}
}