<?php 
	class OEXDAOHandler{

		public function insertExamineeData(
										$_fname, 
										$_lname, 
										$_email, 
										$_pass,
										$url){
			try{
				if (empty($_fname)) {
					print("Information not completed");
					return false;
				}
				if (empty($_lname)) {
					print("Information not completed");
					return false;
				}
				if (empty($_email)) {
					print("Information not completed");
					return false;
				}
				if (empty($_pass)) {
					print("Information not completed");
					return false;
				}

				if(OEXDAO::ValidateEmail($_email)){
					return array(
								'status' => 'failed',
					 			'message' => 'Your Email Already Exist' 
					 			);
				}
				if (strlen($_fname) < 2) {
					return array(
								'status' => 'failed',
					 			'message' => 'Invalid Firstname' 
					 			);
				}
				if (strlen($_lname) < 2) {
					return array(
								'status' => 'failed',
					 			'message' => 'Invalid Lastname' 
					 			);
				}

				$insert = OEXDAO::insertExamineeData(
													$_fname, 
													$_lname, 
													$_email, 
													$_pass,
													$url);
				if ($insert) {
					return array(
								'status' => 'success',
					 			'message' => 'You may now login' 
					 			);
				}else{
					return array(
								'status' => 'failed',
					 			'message' => 'Error' 
					 			);
				}
			
			}
			catch(Exception $e){
            	error_log($e->getMessage());
        	}
        	return false;
		}

		public function loginInfo($_user, $_pass2){
		try{
			if (empty($_user)) {
				print("Information not completed");
				return false;
			}

			if (empty($_pass2)) {
				print("Information not completed");
				return false;
			}
			$insert = OEXDAO::loginInfo(
										$_user, 
										$_pass2
										);
			if ($insert > 0) {
				return $insert;
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