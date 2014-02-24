<?php 
	require_once 'config.php';
	require_once 'QuestionDAO.php';
	require_once 'QuestionDAOHandler.php';

	session_start();
	$id = (isset($_GET['id'])) ? $_GET['id'] : false;
	$sql = new QuestionDAOHandler();
	$result = $sql->DeleteQuestion($id);
	if ($result === true) {
		echo "<script>alert('Successfully Deleted the question number ".$id."!!');window.location.href='questions.php'</script>";
	}else{
		echo "<script>alert('Invalid Update.. You need to changed atleast 1 of the data!!');window.location.href='questions.php'</script>";
	}
 ?>