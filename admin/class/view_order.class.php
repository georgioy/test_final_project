<?php

	require_once('../../DAL/DAL.class.php');

	class order{
	

		public function AllProductsOrdere($customer_id,$order_date_time){
			$sql="SELECT ordered.id,ordered.customer_id,products.id,products.product_image,ordered.status, products.product_name,products.product_category,products.product_gender,ordered.product_quantity,products.product_final_price,ordered.date_time FROM ordered,customers,products WHERE (ordered.customer_id='$customer_id' and ordered.date_time ='$order_date_time' and ordered.product_id=products.id) GROUP BY ordered.id;";
		
			$db = new DAL();
		
			$rows=$db->getData($sql);
		
			return $rows;
		}
		public function FilterTheTable($selected){
			$sql="SELECT customers.id,customers.username,customers.email,customers.phone_number,customers.address,ordered.status,ordered.date_time FROM ordered,customers WHERE (ordered.customer_id=customers.id AND ordered.status = '$selected') GROUP by date_time ORDER BY date_time DESC;";
		
			$db = new DAL();
		
			$rows=$db->getData($sql);
		
			return $rows;
		}
		public function customerinfo($customer_id){
			$sql="SELECT * from customers WHERE id=$customer_id";
		
			$db = new DAL();
		
			$rows=$db->getData($sql);
		
			return $rows;
		}
		public function acceptorder($status,$id){
			$sql="Update ordered SET status='$status' WHERE ordered.customer_id=$id";
			$db = new DAL();
		
			$rows=$db->ExecuteQuery($sql);
		
			return $rows;
		}
		
	}

?>