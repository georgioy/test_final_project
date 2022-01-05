<?php
	//header('Access-Control-Allow-Origin: *');
	//checkSession();
    function checkSession(){
		if(isset($_GET["uid"])){
			$uid=$_GET["uid"];
			// session_start();
			 $_SESSION["userid"] = $uid;
			 if(isset($_SESSION["userid"])){
           
				//echo $uid;
				return $uid;
			}
			else{
				//take to login page
			   //header("location:http://localhost/final1/f1/test_final_project/admin/Customers.php");
				//echo("no user");
				return 0;
			}
		}
       

       
     }


?>