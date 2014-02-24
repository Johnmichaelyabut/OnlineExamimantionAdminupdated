<?php 
	require_once 'config.php';
	require_once 'OEXDAO.php';
	require_once 'OEXDAOHandler.php';
	session_start();
	$_user = $_POST['user'];
	$_pass2 =sha1($_POST['pass']);
	$insert1 = new OEXDAOHandler();
	$answer = $insert1->loginInfo($_user, $_pass2);
	$_SESSION['fname'] = $answer['fname'];
	$_SESSION['lname'] = $answer['lname'];
	$_SESSION['photo'] = $answer['photo'];
	$_SESSION['id'] = $answer['id'];
	if($answer > 0){
		echo "<script>alert('Your Now Successfully login!!')</script>";
	}else{

		echo "<script>alert('Invalid Username or Password!');window.location.href='index.php'</script>";
	}
	
 ?>
 <html>
	<head>
		<title>Online Examination</title>
	</head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<body>
		<?php include "Assets/Banner3.php"; ?>
		<div>
			<div class="container well span" id = "submit">
				<div>
					<img src="<?=$_SESSION['photo']?>" id = "imgKo">
					<div id = "name"><center><h5><u><?=$_SESSION['fname'];?> <?=$_SESSION['lname'];?></u></h5></center></div>
					<h6 id ="examinee">Today's Examinee</h6>
					<span id = "para">
						<center>
							<p>Press the Start button to start the Examination</p>
							<p>If you did not answer a question</p>
							<p> in alloted time <font color = "red">3 minutes</font></p>
							<p>Your score will be automatically <font color = "red">Zero</font></p>
						</center>
					</span>
				</div>
				<div class = "page-header"></div>
				<?php  
					echo"<form method = 'POST' action = 'questionaireHidden.php'>";
					echo "<input type = 'hidden' class = 'hide' name = 'id' value = '".$_SESSION['id']."'>";
					echo "<input type = 'hidden' class = 'hide' name = 'lname' value = '".$_SESSION['lname']."'>";
					echo "<input type = 'hidden' class = 'hide' name = 'fname' value = '".$_SESSION['fname']."'>";
					echo "<input type = 'submit' class = 'btn btn-warning' id = 'yes'value = 'Start' style = 'float: center;height: 40px;width: 400px;margin-left: 90px;'>";
					echo "</form>";
				?>
			</div>
		</div>
		<div id = "foot">
				<?php include 'Assets/footer.php'; ?>
		</div>
	</body>
</html>