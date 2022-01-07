<?php

	require_once('../../DAL/DAL.class.php');

	class login{
	
	
		public function	CheckUserType($email){

			$sql="select user_type from customers where email='$email'";
		
		
			$db = new DAL();
		
			$rows=$db->getData($sql);
		
			return $rows[0]['user_type'];
		}
			
		public function	verifyEmailPassword($email,$password){


			$sql="select * from customers where email='$email'";
		
		
			$db = new DAL();
		
			$rows=$db->getData($sql);
			if($rows!=0){
				$password_hashed=$rows[0]['password'];
			
				if(Password_verify($password,$password_hashed)){
		

					return $rows;
				}
			}

			else {
            	return 0;
			}        
		}
		public function GetCattodropdown(){
			$sql="Select * from categories where cat_status='1' order by cat_id ASC ";
	    
		    $db= new DAL();
		
		    $rows= $db->getData($sql);
		
		    return $rows;	
		}
		public function	logins($user_email,$status){

			$sql="INSERT INTO logins_registers (user_email,action_status) VALUES ('$user_email','$status');";
		
		
			$db = new DAL();
		
			$rows=$db->ExecuteQuery($sql);
		
			return $rows;
		}
	
	}
	
	
?>