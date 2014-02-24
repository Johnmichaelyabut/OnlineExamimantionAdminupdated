<?php 
	require_once 'config.php';
	require_once 'OEXDAO.php';
	require_once 'OEXDAOHandler.php';
	session_start();
	$_fname = $_POST['fname'];
	$_lname = $_POST['lname'];
	$_email = $_POST['email'];
	$_pass = sha1($_POST['pass']);

	$name = $_FILES['file']['name'];
	$size = $_FILES['file']['size'];
	$type = $_FILES['file']['type'];
	$url = "images/".$_FILES['file']['name'];
	$extension = strtolower(substr($name,strrpos($name,'.') + 1));
	$max_size = 102400;
	$tmp_name = $_FILES['file']['tmp_name'];
	if($name != NULL){
		if($size < $max_size || $extension == '.jpg' || $extension == '.jpeg'){

		$location = 'images/';

			if(file_exists($location.$name)){
				echo "<script>alert('Your photo already exist!!');window.location.href='index.php'</script>";
			 }else{
			 	move_uploaded_file($tmp_name, $location.$name);
			}
		}else{
				echo "<script>alert('Invalid Image!!');window.location.href='index.php'</script>";
			
		}
	}else{
		echo "<script>alert('Choose a photo.');window.location.href='index.php';</script>";
	}
	$insert = new OEXDAOHandler();
	$answer = $insert->insertExamineeData($_fname, $_lname, $_email, $_pass, $url );
	$message = $answer['message'];
	if($answer){
		echo "<script>alert('$message');window.location.href='index.php'</script>";
	}else{
		echo "<script>alert('error');window.location.href='index.php'</script>";
	}

 ?>