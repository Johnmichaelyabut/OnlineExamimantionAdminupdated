<?php 
	class OEXDAO{

		public static function insertExamineeData($_fname, $_lname, $_email, $_pass, $url){
			try{
				global $db;
				if(!$_email) return false;
				if(!$_pass) return false;
				$sql = "Insert into examinee(fname, lname, email, pass, score, date, photo) value('$_fname','$_lname', '$_email', '$_pass','0', current_date, '$url')";
				$result = $db->query($sql);
				return true;
					
			}
			catch(Exception $e){
            	error_log($e->getMessage());
        	}
        	return false;
		}

		public static function ValidateEmail($_email)
		{
			try {
				global $db;
				if(!$_email) return false;
				$query = "select * from examinee where email in('$_email')";
				$value = $db->query($query);
				if($value->num_rows>0){
					return true;
				}
				else{
					return false;
				}
			} catch (Exception $e) {
				error_log($e->getMessage());	
			}
			return false;
		}

		public static function loginInfo($_user, $_pass){
		try{
			global $db;
			$sql = "SELECT * FROM examinee WHERE email = '$_user' AND pass = '$_pass'";
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
		}
		catch(Exception $e){
            	error_log($e->getMessage());
        	}
        	return false;
		}
	}
 ?>