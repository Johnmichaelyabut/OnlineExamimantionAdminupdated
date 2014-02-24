<?php 
	require_once 'config.php';
	require_once 'UserDAO.php';
	require_once 'UserDAOHandler.php';

	session_start();
	$id = (isset($_GET['id'])) ? $_GET['id'] : false;
	$sql = new UserDAOHandler();
	$result = $sql->DeleteUser($id);
	if ($result === true) {
		echo "<script>alert('Successfully Deleted!!');window.location.href='UserFront.php'</script>";
	}else{
		echo "<script>alert('Connot delete data!!');window.location.href='UserFront.php'</script>";
	}
 ?>