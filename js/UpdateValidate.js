$(document).ready(function(){
	$('#action1').on('click',function(){
		var question = $('#quest').val();
		var choiceA = $('#A').val();
		var choiceB = $('#B').val();
		var choiceC = $('#C').val();
		var choiceD = $('#D').val();
		var answer = $('#result').val();
		var value = 0;

		if (question.length > 0) {
			value++;
		}
		if (choiceA.length > 0) {
			value++;
		}
		if (choiceB.length > 0) {
			value++;
		}
		if (choiceC.length > 0) {
			value++;
		}
		if(choiceD.length > 0){
			value++;
		}
		if(answer.length > 0){
			value++;
		}
		alert("	");
	});
});