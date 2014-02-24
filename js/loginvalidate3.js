$(document).ready(function(){
	$('#email2').keyup(function(){
		var email = $(this).val();
		var at = email.indexOf('@');
		var dot = email.indexOf('.');
		if(email != ""){
			if((at > 0) && (dot > 0)){
				$('#emailko').html("<img src = 'img/check1.png' style = 'margin-left:37px;height:50px;margin-top:-15px'>");
			}else{
				$('#emailko').html("<img src = 'img/wrong.png' style = 'margin-left:40px;height:43px;margin-top:-15px'>");
			}
		}else{
			$('#emailko').html("<img src = 'img/wrong.png' style = 'margin-left:40px;height:43px;margin-top:-15px'>");
		}
	});
	$('#pass2').keyup(function(){
		var pass = $(this).val();
		if(pass.length > 6){
			$('#passwordko').html("<img src = 'img/check1.png' style = 'margin-left:37px;height:50px;margin-top:-15px'>");
		}else{
			$('#passwordko').html("<img src = 'img/wrong.png' style = 'margin-left:40px;height:43px;margin-top:-15px'>");
		}	
	});
	$('#submit').click(function(){
		var email = $('#email').val();
		var pass = $('#pass').val();

		if(email.length < 10){
			alert("Invalid Email");
			return false;
		}
		if(pass.length < 7){
			alert("Your Password must contain morethan 7 chararcers");
			return false;
		}
	});
});