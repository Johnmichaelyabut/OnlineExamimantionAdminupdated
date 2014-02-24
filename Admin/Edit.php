<?php 
	require_once 'config.php';
	require_once 'QuestionDAO.php';
	require_once 'QuestionDAOHandler.php';
	session_start();
	$id = (isset($_GET['id'])) ? $_GET['id'] : false;

	$sql = new QuestionDAOHandler();
	$result = $sql->EditQuestion($id);
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
	 			<h2><center><font face = "serif">Question <?=$id?></font></center></h2>
	 		</div>
	 		<div>
	 			<form method = "POST" action = "update.php">
	 				<input hidden value = '<?=$id?>' name = "id">
	 			<div>Question: <textarea name = "question" id = "quest"><?=$result['question']?></textarea></div>
	 			<div>
	 				<div>
	 					<div id = "a">A. <input type ="text" id = "A"name = 'a' value = "<?=$result['choiceA']?>"> &nbsp&nbsp C. <input type ="text" id = "A"name = 'c' value = "<?=$result['choiceC']?>"></div>
	 					<div id = "de">B. <input type ="text" id = "A"name = 'b' value = "<?=$result['choiceB']?>"> &nbsp&nbsp D. <input type ="text" id = "A"name = 'd' value  = "<?=$result['choiceD']?>"></div>
	 					<div id = "answer">Answer: 
	 						<select name = "answer" id = "sagots">
	 							<option value = "<?=$result['result']?>"><?=$result['result']?></option>
	 							<option value = "a">a</option>
	 							<option value = "b">b</option>
	 							<option value = "c">c</option>
	 							<option value = "d">d</option>
	 						</select>
	 					</div>
	 				</div>
	 			</div>	
	 			<div class = "page-header"></div>
	 			<div class = " offset2">
	 				<button class = "btn btn-info save" id = "act" style = "margin-left:-40px;" >Save</button></form>
	 				
	 			</div>
	 			<a href="questions.php"><button class = "btn btn-danger" id = "act1">Discard</button></a>
	 		</div>
	 	</div>
	 </body>
	 <?php include '../Assets/footer.php';?>
 </html>