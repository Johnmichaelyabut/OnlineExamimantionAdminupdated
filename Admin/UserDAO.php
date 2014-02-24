<?php 
	class UserDAO{
		public static function LoginAdmin($email, $pass)
		{
			try {
				global $db;
				$sql = "SELECT * from Admin where email = '$email' and password = '$pass'";
				$result = $db->query($sql);
				if($result){
					if ($result->num_rows>0) {
	               		return $result->fetch_assoc();
		            } else {
		                return false;
		            }
		        }else{
						return false;
		        }
			} catch (Exception $e) {
				error_log($e->getMessage());
			}
			return false;
		}
		public static function getUsers()
		{
			try {
				global $db;
				$sql = "Select * from examinee";
				$result = $db->query($sql);
				if ($result->num_rows > 0) {
					$array = array();
					while ($row =$result->fetch_assoc()) {
						$array[] = $row;
					}
				}
				return $array;
			} catch (Exception $e) {
				error_log($e->getMessage());
			}
			return false;
		}
		public static function DeleteUser($id)
		{
			try {
				global $db;
				$sql = "DELETE from examinee where id = '$id'";
				$result = $db->query($sql);
				return $result;
			} catch (Exception $e) {
				error_log($e->$getMessage());
			}
			return false;
		}
		public static function EditUser($id)
		{
			try {
				global $db;
				$sql = "select * from examinee where id = '$id'";
				$result = $db->query($sql);
				return $result->fetch_assoc();
			} catch (Exception $e) {
				error_log($e->getMessage());
			}
			return false;
		}
		public static function UpdateUser($id, $F_name, $L_name, $EMAIL, $PASSWORD)
		{
			try {
				global $db;
				$sql = "UPDATE examinee set fname = '$F_name', lname = '$L_name', email = '$EMAIL', pass = '$PASSWORD' 	where id = '$id'";
				$result = $db->query($sql);
				return $result;
			} catch (Exception $e) {
				error_log($e->getMessage());
			}
			return false;
		}
		public static function GenerateReport(){
			try{
				global $db;
				$sql = "Select * from examinee";
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