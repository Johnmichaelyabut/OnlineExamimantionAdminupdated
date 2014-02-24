<?php 
	class QuestionDAOHandler{
		public function getQuestion(){
			try{
				$insert = QuestionDAO::getQuestion();

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
		public function EditQuestion($id)
		{
			if(empty($id)){
				print("Invalid Id");
				return false;
			}
			$sql = QuestionDAO::EditQuestion($id);
			return $sql;
		}
		public function UpdateQuestion($id, $question, $a, $b, $c, $d, $answer){
			if (strlen($answer) != 1) {
				return array(
					'status'=>'failed',
					'message'=>'Invalid Answer'
					);
			}
			$sql = QuestionDAO::UpdateQuestion($id, $question, $a, $b, $c, $d, $answer);
			return $sql;			
		}
		public function DeleteQuestion($id)
		{
			$sql = QuestionDAO::DeleteQuestion($id);
			return $sql;
		}
		public function AddQuestion($question, $a, $b, $c, $d, $answer)
		{
			if (strlen($answer) != 1) {
				return array(
					'status'=>'failed',
					'message'=>'Invalid Answer'
					);
			}
			if (empty($answer)) {
				return array(
					'status'=>'failed',
					'message'=>'Invalid Answer'
					);
			}
			if (strlen($question) == 1) {
				return array(
					'status'=>'failed',
					'message'=>'Invalid question'
					);
			}
			if(empty($question)){
				return array(
					'status'=>'failed',
					'message'=>'Invalid question'
					);
			}
			if (empty($a)) {
				return array(
					'status'=>'failed',
					'message'=>'Invalid choices'
					);
			}
			if (empty($b)) {
				return array(
					'status'=>'failed',
					'message'=>'Invalid choices'
					);
			}
			if (empty($c)) {
				return array(
					'status'=>'failed',
					'message'=>'Invalid choices'
					);
			}
			if (empty($d)) {
				return array(
					'status'=>'failed',
					'message'=>'Invalid choices'
					);
			}

			$sql = QuestionDAO::AddQuestion($question, $a, $b, $c, $d, $answer);
			if ($sql === true) {
				return array(
					'status'=>'success',
					'message'=>'New Question Added'
					);
			}
		}
	}
 ?>