<?php 
	class QuestionDAO{
		public static function getQuestion(){
			try{
			global $db;
				$sql = "Select * from questions";
				$result = $db->query($sql);
				if ($result->num_rows > 0) {
					$array = array();
					while ($row =$result->fetch_assoc()) {
						$array[] = $row;
					}
				}
				return $array;
			}catch(Exception $e){
				error_log($e->getMessage());
			}
			return false;
		}
		public static function EditQuestion($id)
		{
			try {
				global $db;
				$sql = "select * from questions where id = '$id'";
				$result = $db->query($sql);
				return $result->fetch_assoc();
			} catch (Exception $e) {
				error_log($e->getMessage());
			}
			return false;
		}
		public static function UpdateQuestion($id, $question, $a, $b, $c, $d, $answer)
		{
			try {
				global $db;
				$sql = "UPDATE questions set question = '$question', choiceA = '$a', choiceB = '$b', choiceC = '$c', choiceD = '$d', result = '$answer' where id = '$id'";
				$result = $db->query($sql);
				return $result;
			} catch (Exception $e) {
				error_log($e->getMessage());
			}
			return false;
		}
		public static function DeleteQuestion($id)
		{
			try {
				global $db;
				$sql = "DELETE from questions where id = '$id'";
				$result = $db->query($sql);
				return $result;
			} catch (Exception $e) {
				error_log($e->$getMessage());
			}
			return false;
		}
		public static function AddQuestion($question, $a, $b, $c, $d, $answer)
		{
			try {
				global $db;
				$sql = "INSERT INTO questions(question, choiceA, choiceB, choiceC, choiceD, result) VALUES('$question','$a','$b','$c','$d','$answer')";
				$result = $db->query($sql);
				if($result){
					return true;
				}else{
					return false;
				}
			} catch (Exception $e) {
				error_log($e->getMessage());
			}
			return false;
		}
	}
 ?>