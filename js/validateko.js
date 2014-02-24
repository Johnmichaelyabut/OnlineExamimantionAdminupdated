$(document).ready(function(){
	$('#lname').keyup(function(){
		var name = $(this).val();
		var fname = $('#fname').val();

		if((name.length > 0) && (fname.length > 0)){
			$('#fullname').html("<img src = 'img/check1.png' style = 'margin-left:37px;height:50px;margin-top:-15px'>");
		}else{
			$('#fullname').html("<img src = 'img/wrong.png' style = 'margin-left:40px;height:43px;margin-top:-15px'>");
		}
	});
	$('#email').keyup(function(){
		var email = $(this).val();
		var at = email.indexOf('@');
		var dot = email.indexOf('.');
		if(email != ""){
			if((at > 0) && (dot > 0)){
				$('#email3').html("<img src = 'img/check1.png' style = 'margin-left:37px;height:50px;margin-top:-15px'>");
			}else{
				$('#email3').html("<img src = 'img/wrong.png' style = 'margin-left:40px;height:43px;margin-top:-15px'>");
			}
		}else{
			$('#email3').html("<img src = 'img/wrong.png' style = 'margin-left:40px;height:43px;margin-top:-15px'>");
		}
	});
	$('#pass').keyup(function(){
		var pass = $(this).val();
		if(pass.length > 6){
			$('#password1').html("<img src = 'img/check1.png' style = 'margin-left:37px;height:50px;margin-top:-15px'>");
		}else{
			$('#password1').html("<img src = 'img/wrong.png' style = 'margin-left:40px;height:43px;margin-top:-15px'>");
		}
	});
	$('#pass1').keyup(function(){
		var pass1 = $(this).val();
		var pass = $('#pass').val();
		if(pass1 != pass){
			$('#confirm').html("<img src = 'img/wrong.png' style = 'margin-left:40px;height:43px;margin-top:-15px'>");
		}else if(pass1.length == 0){
			$('#confirm').html("<img src = 'img/wrong.png' style = 'margin-left:40px;height:43px;margin-top:-15px''>");
		}else{
			$('#confirm').html("<img src = 'img/check1.png' style = 'margin-left:37px;height:50px;margin-top:-15px'>");
		}
	});
});