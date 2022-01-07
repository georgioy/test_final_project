<?php

	require_once('../../DAL/DAL.class.php');

	class customer{
	
	
		public function	AddCustomers($username,$phone_number,$address,$email,$password,$status,$user_type){

			$sql="insert into customers (id,username,email,password,address,status,user_type,phone_number) values ('','$username','$email','$password','$address','$status','$user_type','$phone_number')";
		
		
			$db = new DAL();
		
			$rows=$db->ExecuteQuery($sql);
		
			return $rows;
		}
			
		public function	CheckEmail($email){

			$sql="select email from customers where email='$email'";
		
		
			$db = new DAL();
		
			$rows=$db->getData($sql);

			if($rows == null){
				return $rows = 0;
			}
			else {
				return $rows =1;
            }
		}
		public function	GetNewCostumerId($email){


			$sql="select id from customers where email='$email'";
		
		
			$db = new DAL();
		
			$rows=$db->getData($sql);  
			return $rows;
		}
		public function	LastIdCustomer(){


			$sql="select Max(id) from customers";
		
		
			$db = new DAL();
		
			$rows=$db->getData($sql);  
			return $rows;
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