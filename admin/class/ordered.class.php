<?php

	require_once('../../DAL/DAL.class.php');

	class ordered{
	

		public function AllOrderes(){
			$sql="SELECT customers.id,customers.username,customers.email,customers.phone_number,customers.address,ordered.status,ordered.date_time FROM ordered,customers WHERE ordered.customer_id=customers.id GROUP by date_time ORDER BY ordered.id DESC;";
		
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

		public function deleteAllActions(){
			$sql="Delete FROM `ordered`";
		
			$db = new DAL();
		
			$rows=$db->getData($sql);
		
			return $rows;
		}
	}

?>