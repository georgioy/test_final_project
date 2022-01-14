<?php
	 require_once('../../DAL/DAL.class.php');
	 class Cart
	 {
		
		 public function GetCattodropdown()
		 {
			$sql="Select * from categories where cat_status='1' order by cat_id ASC ";
	    
		    $db= new DAL();
		
		    $rows= $db->getData($sql);
		
		    return $rows;	
		 }
		 public function GetproductbyId($id)
	       {
		    $sql="Select * from products where id=$id";
	    
		    $db= new DAL();
		
		    $rows= $db->getData($sql);
		
		    return $rows;	
	       }
		 public function OrderNow($Customer_id,$product_id,$product_qty,$status)
		 {
			 $sql="INSERT INTO `ordered` (`customer_id`, `product_id`, `product_quantity`, `status`, `date_time`) VALUES ('$Customer_id', '$product_id', '$product_qty', '$status', CURRENT_TIMESTAMP)";
			 
			 $db= new DAL();
		 
		    $rows= $db->getData($sql);
		
		    return $rows;	
			 
		 }
		
		 
		 
		 
		 
	 }
	 
	 
	 
	 
	 ?>