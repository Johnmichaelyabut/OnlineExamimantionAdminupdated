<?php 
	require_once 'config.php';
	require_once 'QuestionDAO.php';
	require_once 'QuestionDAOHandler.php';
	$id = (isset($_POST['id'])) ? $_POST['id'] : false;
	$question = $_POST['question'];
	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $_POST['c'];
	$d = $_POST['d'];
	$answer = $_POST['answer'];
	$sql = new QuestionDAOHandler();
	$result = $sql->UpdateQuestion($id, $question, $a, $b, $c, $d, $answer);
	if ($result === true) {
		echo "<script>alert('Successfully Updated the question number ".$id."!!');window.location.href='questions.php'</script>";
	}else{
		echo "<script>alert('Invalid Answer!!');window.location.href='questions.php'</script>";
	}
 ?>
