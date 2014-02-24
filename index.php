<html>
	<head>
		<title>Online Examination</title>
	</head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<body>
		<?php include "Assets/Banner.php"; ?>
			<div id = "back-end" class = "container well span">
				<form name = "examinee" method = "POST" action = "incode.php" enctype = "multipart/form-data">
					<div id = "title"><center><h1><font face = "tolkien">Registration Form</font></h1></center></div>

					<div class = "page-header"></div>

					<div id = "input">
						<input type = "text" id = "fname" name = "fname" placeholder = "First name..."/>
						<input type = "text" id = "lname" name = "lname" placeholder = "Last name..."/>
						<span id = "fullname"></span>
					</div>

					<div id = "input1">
	               		<input type = "email" name = "email" id = "email" placeholder = "Enter your Email/Username..."/>
	               		<span id = "email3"></span>
	                </div>

					<div id = "input1">
						<input type = "password" id = "pass" name = "pass" placeholder = "Enter your Password not less than 8 characters.." />
						<span id = "password1"></span>
					</div>

					<div id = "input1">
						<input type = "password" id = "pass1" name = "pass1" placeholder = "Confirm Password.."/>
						<span id = "confirm"></span>
					</div>

					<div id = "pic" class  = "">
						<label>
						<span><h5 id  = "attach">Attach 2/2 picture:</h5></span>
						<input type = "file" name  = "file" id = "picture" class = "btn btn-info"/>
						</label>
					</div>
						
						<input class = "btn btn-primary" id = "submit" type = "submit" name = "save" value = "Submit" onclick = "return validate()">
				</form>
			</div>
		<script type="text/javascript" src = "js/validation.js"></script>
		<script type="text/javascript" src = "js/validateko.js"></script>
		<script type="text/javascript" src = "js/Emailvalidation.js"></script>
		<script src="js/jquery.1.10.2.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	</body>
	<?php include 'Assets/footer.php'; ?>
</html>
