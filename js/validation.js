
function validate(){
	var a=document.forms["examinee"]["fname"].value;
	var b=document.forms["examinee"]["lname"].value;
	var c=document.forms["examinee"]["email"].value;
	var d=document.forms["examinee"]["pass"].value;
	var e=document.forms["examinee"]["pass1"].value;

	if (a==null || a=="")
	{
		alert("First Name must be filled out");
		return false;
	}
	if (b==null || b=="")
	{
		alert("Last Name must be filled out");
		return false;
	}
	if (c==null || c == '' )
	{
		alert("Verify your email");
		return false;
	}
	if (c==null || c == '')
	{
		alert("Enter 8 characters on your Password");
		return false;
	}
	if (e != d)
	{
		alert("Password is not pair");
		return false;
	}
}

   		