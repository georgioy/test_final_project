<?php


  require_once("../class/Cart.class.php");

   
    $op = $_GET["op"];

 switch ($op)
  {
		
	
	 case 2:
		 {
			 $cart = new Cart() ;
			 
			 $result=$cart->GetCattodropdown();
			 
			  echo json_encode($result);

			 
			 break;
		 }
	 case 3:
		 {
			  session_start();
			 
			  $uid=$_SESSION["userid"] ;
			  
			  $cart = new Cart() ;
			 
			 $quantity = $_GET['product_quantity'];
			 $prdt_id = $_GET['product_id'];
			
			 $result=$cart->OrderNow($uid, $prdt_id,$quantity,0);	
			
			 unset($_SESSION["cart"]);
			 
			  echo json_encode($result);

			 
			 break;
			 
			 
		 }
		 
	 case 8:
             { 
				 $cart = new Cart();
			 
				  session_start();


            $_SESSION["cart"];
			$array_pid = array_unique(array_filter($_SESSION["cart"]));	 
		
            $uid=$_SESSION["userid"] ;

				
				 $a=array();
				  foreach( $array_pid as $value)
				  {
					  $result=$cart->GetproductbyId($value);
					  array_push($a, $result[0]);
				  }
				 echo json_encode($a);	
				

			 
			 break;
				
		}
		 
 
	 header("Content-type:application/json"); 		
//	echo json_encode($result);
 }

?>