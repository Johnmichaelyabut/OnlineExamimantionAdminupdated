<?php 
	require_once 'config.php';
	require_once 'UserDAO.php';
	require_once 'UserDAOHandler.php';
	session_start();
	$id = (isset($_GET['id'])) ? $_GET['id'] : false;

	$sql = new UserDAOHandler();
	$result = $sql->EditUser($id);
 ?>
 <html>
	 <head>
	 	<title>Admin Page</title>
	 	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	 	<link rel="stylesheet" type="text/css" href="../css/style.css">
	 	<link rel="stylesheet" type="text/css" href="../css/style1.css">
 
	 </head>
	 <?php include '../Assets/Banner3.php';?>
	 <body>
	 	<div id = "back" class = "span well container">
	 		<div class = "page-header">
	 			<h2><center><font face = "serif">User</font></center></h2>
	 		</div>
	 		<div>
	 			<form method = "POST" action = "UpdateUser.php">
	 				<input hidden name = "id" value = "<?=$id?>">
					<div>
						<span id = "thisId">Firstname: </span><input type = "text" id = "pangalan1" name = "F_name" value = "<?=$result['fname']?>" style = "margin-left:14px;">	 				
					</div>
					<div>
						<span id = "thisId">Lastname: </span><input type = "text" id = "pangalan1" name = "L_name" value="<?=$result['lname']?>">
					</div>	 				
	 				<div >
	 					<span id = "thisId">Email: </span><input type = "email" id = "pangalan1" name = "EMAIL" value="<?=$result['email']?>" style = "margin-left:46px;">
	 				</div>
	 				<div>
	 					<span id = "thisId">Password: </span><input type = "password" id ="pangalan1" name = "PASSWORD" value="<?=$result['pass']?>">
	 				</div>
	 			<div class = " offset2">
	 				<button class = "btn btn-info save" id = "act" style = "margin-left:-40px;">Save</button></form>
	 				
	 			</div>
	 			<a href="UserFront.php"><button class = "btn btn-danger" id = "act1" style = "margin-top:-20px">Discard</button></a>
	 		</div>
	 	</div>
	 </body>
	 <?php include '../Assets/footer.php';?>
 </html>