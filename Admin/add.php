<?php 
	require_once 'config.php';
	require_once 'QuestionDAO.php';
	require_once 'QuestionDAOHandler.php';

	session_start();
	$question = $_POST['question'];
	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $_POST['c'];
	$d = $_POST['d'];
	$answer = $_POST['answer'];
	$sql = new QuestionDAOHandler();
	$result = $sql->AddQuestion($question, $a, $b, $c, $d, $answer); 
	$message = $result['message'];	
	echo "<script>alert('$message');window.location.href='AddQuestion.php'</script>";
	
 ?>
