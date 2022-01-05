<?php


  require_once("../class/Cart.class.php");

   
    $op = $_GET["op"];

 switch ($op)
  {
	case 1:
		 {
           $cart = new Cart() ;
	     
	       $result=$cart->GetallCart();
			 
           break;
	    }
	 case 2:
		 {
			 $cart = new Cart() ;
			 
			 $result=$cart->GetCattodropdown();
			 
			 break;
		 }
 }
	 header("Content-type:application/json"); 		
	 echo json_encode($result);


?>