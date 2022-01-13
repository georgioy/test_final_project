<?php

		
	function checkSessionAdmin()
	{
		session_start();

		if(isset($_SESSION["id"])&&$_SESSION["user_type"]=="admin")
		{
			$id=$_SESSION["id"];

			return $id;

		}
		else
			header("Location:../login&register/Login.php");
	}

	function checkSessionCustomer()
	{
		session_start();
		if(isset($_SESSION["id"])&&$_SESSION["user_type"]=="customer")
		{
			$id=$_SESSION["id"];
			$user_type=$_SESSION["user_type"];

			echo $id;

		}
	}
?>