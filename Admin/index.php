<html>
	<head>
		<title>Online Examination</title>
	</head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<body>
		<?php include "../Assets/Banner3.php"; ?>
			<div id = "back-end" class = "container well span">
				<form name = "examinee" method = "POST" action = "login.php">
					<div id = "title"><center><h1><font face = "tolkien">Login</font></h1></center></div>

					<div class = "page-header"></div>

					<div id = "input1">
	               		<input type = "email" name = "email" id = "email" placeholder = "Enter your Email/Username..."/>
	               		<span id = "emailko"></span>
	                </div>

					<div id = "input1">
						<input type = "password" id = "pass" name = "pass" placeholder = "Enter your Password not less than 8 characters.." />
						<span id = "passwordko"></span>
					</div>
						<input class = "btn btn-primary" id = "submit" type = "submit" name = "save" value = "Submit">
				</form>
			</div>
		<script src="../js/jquery.1.10.2.js"></script>
	    <script src="../js/loginvalidate2.js"></script>
	</body>
	<?php include '../Assets/footer.php'; ?>
</html>
