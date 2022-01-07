<?php

	require_once('../class/login.class.php');
	
	$login = new login();
	$op=0;
	if(isset($_GET['op'])){
		$op = $_GET['op'];
	}

	switch ($op) {
	
		////Check if this email and password in db
		case 1:
				$email=$_GET['email'];
				$password=$_GET['password'];
				$result = $login->verifyEmailPassword($email,$password);
				session_start();
				if($result!=0){
					$user_type = $result[0]['user_type'];

					if($user_type == "admin"){
						$status=1;
						$login->logins($email,$status);
						$_SESSION["id"] = $result[0]['id'];
						$_SESSION["user_type"] = $user_type;
						$result = $user_type;
					}
					if($user_type == "customer"){
						$status=3;
						$login->logins($email,$status);
						$_SESSION["id"] = $result[0]['id'];
						$_SESSION["user_type"] = $user_type;

						$result = $user_type;
					}

				}
				else{
					$status=0;
					$login->logins($email,$status);
					$result = 0;
				}

				break;
	 case 2:
		 {
			 
			 $result=$login->GetCattodropdown();
			 
			 break;
		 }
	case 3:
		 {
			 $result=$login->logins($user_email,$status);
			 
			 break;
		 }
		default:
				break;
	}
	header("Content-type:application/json");
	echo json_encode($result);

?>