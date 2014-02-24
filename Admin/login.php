<?php 
	include 'config.php';
	require_once 'UserDAO.php';
	require_once 'UserDAOHandler.php';

	session_start();
	$email = (isset($_POST['email'])) ? $_POST['email'] : false;
	$pass = (isset($_POST['pass'])) ? sha1($_POST['pass']): false;

	$insert = new UserDAOHandler();
	$rows = $insert->LoginAdmin($email, $pass);
	$_SESSION['f_name'] = $rows['f_name'];
	$_SESSION['l_name'] = $rows['l_name'];
 	if($rows > 0 ){
 		echo " <script>alert('Your Successfully Log-on to Online Examination!!');window.location.href='Home.php'</script>";
 	}else{	
 		echo " <script>alert('Invalid Username or Password!!');window.location.href='index.php'</script>";
 	}
 ?>
 