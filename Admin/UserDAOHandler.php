<?php
	class UserDAOHandler
	{
		public function LoginAdmin($email, $pass){
			if (empty($email)) {
				print("Invalid Email Address");
				return false;
			}
			if(empty($pass)){
				print("Invalid Password");
				return false;
			}

			$rows = UserDAO::LoginAdmin($email, $pass);
			return $rows;
		}
		public function getUsers()
		{
			$rows= UserDAO::getUsers();
			if ($rows) {
				return $rows;
			}else{
				print("error");
				return false;
			}
		}
		public function DeleteUser($id)
		{
			$sql = UserDAO::DeleteUser($id);
			return $sql;
		}
		public function EditUser($id)
		{
			if(empty($id)){
				print("Invalid Id");
				return false;
			}
			$sql = UserDAO::EditUser($id);
			return $sql;
		}
		public function UpdateUser($id, $F_name, $L_name, $EMAIL, $PASSWORD){
			if (strlen($F_name) < 2) {
				return array(
					'status'=>'failed',
					'message'=>'Invalid Firstname'
					);
			}
			if (strlen($L_name) < 2) {
				return array(
					'status'=>'failed',
					'message'=>'Invalid L_name'
					);
			}
			if (strlen($PASSWORD) < 8) {
				return array(
					'status'=>'failed',
					'message'=>'Invalid Password'
					);
			}else{
				$PASSWORD = sha1($PASSWORD);
			}
			$sql = UserDAO::UpdateUser($id, $F_name, $L_name, $EMAIL, $PASSWORD);
			return $sql;			
		}
		public function GenerateReport(){
			try{
				$sql = UserDAO::GenerateReport();
				return $sql;
			}catch(Exception $e){
				error_log($e->getMessage());
			}
			return false;
		}
	}
 ?>
 
