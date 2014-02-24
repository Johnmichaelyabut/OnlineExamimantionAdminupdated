<?php 
	class ExamDAOHandler{

		public function getQuestion($num){
			try{
				if (empty($num)) {
					print("invalid Id");
					return false;
				}

				$insert = ExamDAO::getQuestion($num);

				if ($insert) {
					return $insert;
				}else{
					return false;
				}
			}catch(Exception $e){
				error_log($e->getMessage());
			}
			return false;
		}

		public function computeScore($Id, $score){
			try{
				if (empty($Id)) {
					print("invalid Id");
					return false;
				}

				if(empty($score)){
					print("Invalid Score");
					return false;
				}

				$sql = ExamDAO::computeScore(
											$Id,
											$score);
				return $sql;
			}catch(Exception $e){
				error_log($e->getMessage());
			}
			return false;
		}

		public function checkAnswer($num){
			try{
				if (empty($num)) {
					print("invalid answers");
					return false;
				}
				if(strlen($num) < 10){
					print("Answers not ready");
					return false;
				}
				$insert = ExamDAO::checkAnswer($num);

				if ($insert) {
					return $insert;
				}else{
					return false;
				}
			}catch(Exception $e){
				error_log($e->getMessage());
			}
			return false;
		}

		public function getForms()
		{
			try{
				$sql = ExamDAO::getForms();
				return $sql;
			}catch(Exception $e){
				error_log($e->getMessage());
			}
			return false;
		}
	}
 ?>