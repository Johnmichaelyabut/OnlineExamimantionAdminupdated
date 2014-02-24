
$(document).ready(function(){
	$('#login').click(function(){
		var data = "Send_Request";
		$.ajax({
			url:'BorrowPage.php',
			dataType:'html',
			data:data,
			method:'POST',

			success: function(response){
				$('#container').html(response);
			}
		})
	});

});