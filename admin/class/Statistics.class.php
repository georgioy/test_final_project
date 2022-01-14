<?php

require_once('../../DAL/DAL.class.php');


class Statistics{




 public function GetSaledItems()
	 {
		$sql="SELECT products.product_name ,sum(ordered.product_quantity) AS Quantity FROM ordered INNER join products WHERE ordered.product_id=products.id GROUP BY products.product_name ORDER BY Quantity DESC LIMIT 4";
	    
	    $db = new DAL();
		
		 $rows=$db->getData($sql);
		
		return $rows;
			
	 }
	public function GetMostSaledCat()
	 {
		$sql="SELECT categories.cat_name , SUM(ordered.product_quantity) as quantity from ordered INNER JOIN products INNER JOIN categories WHERE products.product_category = categories.cat_name  and ordered.product_id=products.id GROUP BY categories.cat_name";
	    
	    $db = new DAL();
		
		 $rows=$db->getData($sql);
		
		return $rows;
			
	 }
	public function DateSales()
	 {
		$sql="SELECT DATE_FORMAT(date_time,'%d-%m-%y') as Date, SUM(products.product_final_price*ordered.product_quantity) as Total_Income from ordered INNER JOIN products WHERE ordered.product_id=products.id GROUP BY Date";
	    
	    $db = new DAL();
		
		 $rows=$db->getData($sql);
		
		return $rows;
			
	 }
	
}
?>