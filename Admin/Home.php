<?php 
	session_start();
 ?>
<html>
	 <head>
	 	<title>Admin Page</title>
	 </head>
	 	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" type="text/css" href="../css/style1.css">
		<?php include "../Assets/Banner3.php"; ?>
	 <body>
	 	<div id = 'back-endAdmin' class = 'well container'>
	 		<div id  = "header" class = "page-header">
	 			<h1 id = "head"><center><font face = 'serif'>Admin Home Page</font></center></h1>
	 		</div>
	 		<div class = "span">
	 			<div id = "img">
	 				<img src="../images/1231544_525616100846167_870245968_n.jpg" id = 'img'>
	 				<div id = "adminName">
	 					<?=$_SESSION['f_name']?> <?=$_SESSION['l_name']?>
	 				</div>
	 				<div id = "category">
	 					Admin
	 				</div>
	 				<a href="logout.php"><button class = "btn btn-danger" id = "logout">Logout</button></a>
	 			</div>
	 		</div>
	 		<div class = "span well" id = 'choice'>
	 			<div><a href="questions.php"><img src="../img/buttton.jpg" id = "button1"></a></div>
	 			<div><a href="UserFront.php"><img src="../img/button2.jpg" id = "button2"></a></div>
	 			<div><a href="GenerateReport.php"><img src="../img/button3.jpg" id = "button3"></a></div>
	 		</div>
	 	</div>
	 </body>
	<?php include '../Assets/footer.php'; ?>
 </html>
