<?php
	 require_once('../../DAL/DAL.class.php');
	 class Cart
	 {
		public function GetallCart()
	       {
		    $sql="Select * from products";
	    
		    $db= new DAL();
		
		    $rows= $db->getData($sql);
		
		    return $rows;	
	       }
		 public function GetCattodropdown()
		 {
			$sql="Select * from categories where cat_status='1' order by cat_id ASC ";
	    
		    $db= new DAL();
		
		    $rows= $db->getData($sql);
		
		    return $rows;	
		 }
		 
		 
		 
	 }
	 
	 
	 
	 
	 ?>