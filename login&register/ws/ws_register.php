<?php

	require_once('../class/register.class.php');
	
	$customer = new customer();
	$op=0;
	if(isset($_GET['op'])){
		$op = $_GET['op'];
	}

	switch ($op) {
	
		//add customer
		case 1:
				$username=$_GET['username'];
				$phone_number=$_GET['phone_number'];
				$address=$_GET['address'];
				$email=$_GET['email'];
				$password=$_GET['password'];
				$pass = password_hash($password,PASSWORD_DEFAULT);
				$status=$_GET['status'];
				$user_type=$_GET['user_type'];
				$stu=2;
				$customer->logins($email,$stu);
				$result=$customer->AddCustomers($username,$phone_number,$address,$email,$pass,$status,$user_type);

				break;

		////Check if this email in db
		case 2:
				$email=$_GET['email'];
				$result=$customer->CheckEmail($email);
				break;
		case 3:
				$result=$customer->LastIdCustomer();
				session_start();
				$_SESSION["user_type"]="customer";
				$_SESSION["id"] = $result[0]['Max(id)']+1;

				break;
		case 4:
				$result=$customer->GetCattodropdown();

				break;

		default:

			break;
		}	

	header("Content-type:application/json");
	echo json_encode($result);

	




?>