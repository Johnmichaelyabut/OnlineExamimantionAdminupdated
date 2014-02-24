<?php 
	class ExamDAO{

		public static function getQuestion($num){
			try{
				global $db;
				$sql = "Select id, question, choiceA, choiceB, choiceC, choiceD, result from questions where id = '$num'";
				$result = $db->query($sql);
				return $result->fetch_assoc();
			}catch(Exception $e){
				error_log($e->getMessage());
			}
			return false;
		}

		public static function computeScore($Id, $score){
			try{
				global $db;
				$sql = "UPDATE examinee SET score = ('$score') where id = '$Id'";
				$result = $db->query($sql);
				return $result;
			}catch(Exception $e){
				error_log($e->getMessage());
			}
			return false;
		}

		public static function getANSWERS(){
			try{
				global $db;
				$sql = "SELECT result FROM questions ORDER BY id";
				$result = $db->query($sql);
				$answer = array();
				while($rows = $result->fetch_assoc()){
					$answer[] = $rows['result'];
				}
				return $answer;
			}catch(Exception $e){
				error_log($e->getMessage());
			}
			return false;
		}

		public static function checkAnswer($answer){
			try{
				$correct = self::getANSWERS();
				if($correct === false){
					error_log("Answers are not ready!!");
					return false;
				}if(count($correct) != strlen($answer)){
					error_log("Your answer are not valid");
					return false;
				}
				$num = count($correct);
				$val = 0;
				for($a = 0; $a < $num ;$a++){
					if($answer[$a] == $correct[$a]){
						$val++;
					}
				}
				return $val;
			}catch(Exception $e){
				error_log($e->getMessage());
			}
			return false;
		}

		public static function getForms()
		{
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
	}
 ?>