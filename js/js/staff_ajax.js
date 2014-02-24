
$(document).ready(function(){
	$('#addbooks').click(function(){
		var data = "Send_Request";
		$.ajax({
			url:'staffAddBook.php',
			dataType:'html',
			data:data,
			method:'POST',

			success: function(response){
				$('#container').html(response);
			}
		})
	});

	$('#home').click(function(){
		var data = "Send_Request";
		$.ajax({
			url:'staffHome.php',
			dataType:'html',
			data:data,
			method:'POST',

			success: function(response){
				$('#container').html(response);
			}
		})
	});

	$('#request').click(function(){
		var data = "Send_Request";
		$.ajax({
			url:'staffRequest.php',
			dataType:'html',
			data:data,
			method:'POST',

			success: function(response){
				$('#container').html(response);
			}
		})
	});
});