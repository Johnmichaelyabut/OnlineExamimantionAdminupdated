<?php 
	require_once 'config.php';
	require_once 'UserDAOHandler.php';
	require_once 'UserDAO.php';

	$sql = new UserDAOHandler();
	$result = $sql->getUsers();
	$id = 1;
	$space = "../";
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
	 	<div id = "WorkSpace" class = "well container">
			<div class = "page-header"><center><font face = "serif"><h1 id = "title">Users</h1></font></center></div>
			<div>
				<a href="Home.php"><button class = "btn btn-primary" id = "but1">Home Page</button></a>
			</div>
	 		<?php foreach ($result as $key):?>
			<img src="<?=$space.$key['photo']?>" id = "imgKo">
			<div id = "basic1">
				<div id = "name"><h4><span name = "num"><?=$id?></span>. Name: <?=$key['fname']." ".$key['lname'];?></h4></div>
				<div id = "basic">
					<h5><div id = "info">Email: &nbsp&nbsp&nbsp&nbsp&nbsp<?=$key['email']?></div></h5>
					<h5><div id = "info">Date: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?=$key['date']?></div></h5>
				</div>
			</div>
			<div><a href="EditUser.php?id=<?=$key['id']?>"><button class = "btn btn-info" id = "update">Update</button></a>
			<a href="UserDelete.php?id=<?=$key['id']?>"><button class = "btn btn-danger" id = "delete" onclick = "return confirm('Do you want to delete this User?')">Delete</button></a></div>
			<div class = "page-header" id = "cut"></div>
		<?php $id++; endforeach;?>
	 	</div>
	 </body>
	<?php include '../Assets/footer.php'; ?>
 </html>
