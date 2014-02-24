$(document).ready(function(){
 	$("#start").on('click', function(){
		$('#back-end').animate({
			opacity: .15,
			width: "200px",
			height: "20px"
			},5000, function(){
				$('#back-end').slideUp(1000);
				$('#back-end').slideDown(1000);
				$('#back-end').animate({
					opacity: 15,
					width: "600px",
					height: "450px"
				},2000);
			}
 		);
 	});
 });