
function loginvalidate(){
	var f=document.forms["login"]["user"].value;
	var g=document.forms["login"]["pass2"].value;

	if(f ==null || f == ""){
		alert("Enter your Username")
		return false;
	}
	if(g ==null || g == ""){
		alert("Enter your Password")
		return false;
	}
}