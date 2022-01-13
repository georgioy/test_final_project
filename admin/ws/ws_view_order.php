<?php

	require_once('../class/view_order.class.php');
	
	$order= new order();
	$op=0;
	if(isset($_GET['op'])){
		$op = $_GET['op'];
	}

	switch ($op) {
		//display order
		case 1:
		     
			session_start();
			$customer_id=$_SESSION['customer_id'];
			$order_date_time=$_SESSION['date_time'];
			$result=$order-> AllProductsOrdere($customer_id,$order_date_time);

			break;
			//get customer information
		case 2:
			session_start();
			$customer_id=$_SESSION['customer_id'];
			$result=$order->customerinfo($customer_id);

		
			break;
		//accept order
		case 3:
			session_start();
			$customer_id=$_SESSION['customer_id'];
			echo $customer_id;
			$status=$_GET['status'];
			$result=$order->acceptorder($status,$customer_id);

		
			break;

		default:
		
			break;
	}	
	header("Content-type:application/json");
	echo json_encode($result);

?>

