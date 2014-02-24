<?php 
	require_once 'config.php';
	require_once 'QuestionDAO.php';
	require_once 'QuestionDAOHandler.php';

	$sql = new QuestionDAOHandler();
	$result = $sql->getQuestion();
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
		<div class = "container span well" id = "questionaire">
			<div class = "page-header"><center><font face = "serif"><h1 id = "title">Questions</h1></font></center></div>
			<div>
				<a href="Home.php"><button class = "btn btn-primary" id = "but1">Home Page</button></a>
			</div>
			<div>
				<a href="AddQuestion.php"><button  class = "btn btn-success" id = 'but'>Add Question</button></a>
			</div>
			<?php foreach ($result as $key):?>
			<div id = "question"><h4><?=$key['id']?>. <?=$key['question'];?></h4></div>
			<div id = "choiceA">A. <span><?=$key['choiceA'];?></span></div>
			<div id = "choiceB">B. <span><?=$key['choiceB'];?></span></div>
			<div id = "choiceC">C. <span><?=$key['choiceC'];?></span></div>
			<div id = "choiceD">D. <span><?=$key['choiceD'];?></span></div>
			<div>
				<a href="Edit.php?id=<?=$key['id']?>"><button class = "btn btn-info" id = "action">Edit</button></a>
				<a href="Delete.php?id=<?=$key['id']?>"><button class = "btn btn-danger" id = "action" onclick = "return confirm('Do you want to delete this question?')">Delete</button></a>
			</div>
			<div class = "page-header"></div>
		<?php endforeach;?>
		</div>
	</body>

	<?php include '../Assets/footer.php'; ?>

</html>