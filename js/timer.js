$(document).ready(function(){
		var min = 3;
		var second = 0;
		countdown = setInterval(function(){
			if(min == 0 && second == 0){
				$('#timer').html("0:00");
				clearTimeout(countdown);
				alert('Times Up!!');window.location.href='ResultHidden.php';
			}else if((second % 60) == 0){
				$('#timer').html(min + " :0" + second);
				min--;
				second = 59;
			}else if(second < 10){
				$('#timer').html(min + " :0" + second);
				second-- ;
			}else{
				$('#timer').html(min + " : " + second);
				second-- ;
			}
		},1000);
});