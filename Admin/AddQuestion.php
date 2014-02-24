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
	 			<h2><center><font face = "serif">Question <?=$id?></font></center></h2>
	 		</div>
	 		<div>
	 			<form method = "POST" action = "add.php">
	 				<input hidden value = '<?=$id?>' name = "id">
	 			<div>Question: <textarea placeholder = 'Place your question here..' name = "question" id = "quest"></textarea></div>
	 			<div>
	 				<div>
	 					<div id = "a">A. <input type ="text" id = "A"name = 'a' placeholder = 'Choice in letter A..'> &nbsp&nbsp C. <input type ="text" id = "C"name = 'c' placeholder = 'Choice in letter B..'></div>
	 					<div id = "de">B. <input type ="text" id = "B"name = 'b' placeholder = 'Choice in letter C..'> &nbsp&nbsp D. <input type ="text" id = "D"name = 'd' placeholder = 'Choice in letter D..'></div>
	 					<div id = "answer">Answer: <input type = "text" name = "answer" id = "A"placeholder = 'write the letter of the answer..'></div>
	 				</div>
	 			</div>	
	 			<div class = "page-header"></div>
	 			<div class = " offset2">
	 				<button class = "btn btn-info save" id = "act" style = "margin-left:-40px;">Save</button></form>
	 				
	 			</div>
	 			<a href="questions.php"><button class = "btn btn-danger" id = "act1">Discard</button></a>
	 		</div>
	 	</div>
	 </body>
	 <?php include '../Assets/footer.php';?>
 </html>