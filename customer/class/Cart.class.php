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
			 $date_time= date('l y-m-d H:i',strtotime($H."+1 hour"));
			 $sql="INSERT INTO `ordered` (`customer_id`, `product_id`, `product_quantity`, `status`, `date_time`) VALUES ('$Customer_id', '$product_id', '$product_qty', '$status', '$date_time')";
			 
			 $db= new DAL();
		 
		    $rows= $db->getData($sql);
		
		    return $rows;	
			 
		 }
		 
		 
		 
		 
	 }
	 
	 
	 
	 
	 ?>