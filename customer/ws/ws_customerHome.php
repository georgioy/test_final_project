<?php
	//header('Access-Control-Allow-Origin: *');
    require_once("../class/Customer_Home.class.php");

   
    	
	$customerhome = new customerHome();
	$op=0;
	if(isset($_GET['op'])){
		$op = $_GET['op'];
	}

    

    switch ($op)
    {
        /////get some products on sale
            case 1:
                {
                    $result = $customerhome->getSales();
                 //      echo json_encode($result); 
                    break;
                }

                // get  new arrivals
            case 2:
                {
                    $result = $customerhome->newArrivals();
                //    echo json_encode($result); 
                    break; 			 
                }

              ////get  categories  
            case 3:
                {
                    $result = $customerhome->getCategories();
				//	 echo json_encode($result); 
                    break;
                }

                    ////get  sale id by session  , to add to cart(not needed anymore)
            // case 4:
            //     {
            //         session_start();
            //         $id=$_GET['saleid'];
            //         $_SESSION["salesProductid"] = $id;
            //         header("Content-type:application/json");
            //        // echo json_encode($id);
            //         break;
            //     }
                 ////get id of new arrival to add to cart(not needed anymore)
            //  case 5:
            //     {
            //           session_start();
            //          $id=$_GET['arrivalID'];
            //          $_SESSION["arrivalProductid"] = $id;
            //          header("Content-type:application/json");
            //          echo json_encode($id);
            //          break;

            //     }
                //go to category filter by cat id 
                case 6:
                    {
                          session_start();
                         $id=$_GET['catID'];
                         $_SESSION["catID"] = $id;
                         header("Content-type:application/json");
                         echo json_encode($id);
                         break;
    
                    }
                    ///send user id by session
                    case 7:
                        {
                              session_start();
                             $id=$_GET['userId'];
                             $_SESSION["userid"] = $id;
                             header("Content-type:application/json");
                             echo json_encode($id);
                             break;
        
                        }

                        //add sale or arrival product id to array and send by session
                        case 8:
                            {
					/*			
							$pid = $_GET['PId'];
							
					//		$array_pid = array($pid);	
								
							session_start();	
								
							 $id=$_GET['userId'];
                             $_SESSION["userid"] = $id;	
						    
						   $_SESSION['cart'] [] = $pid;
								
						
						  echo json_encode($_SESSION['cart']); 
						  echo json_encode( $_SESSION["userid"]);
						*/		
							
                             $id = $_GET['PId'];
                              
                             session_start();

                          $_SESSION["cart"][] = $id;
                           
								
				     $array_pid = $_SESSION["cart"];                      
							       
					 $result =  $array_pid;
								
                     
						
							
							
                             break;
                            }
                        case 9:{
			 
			                 $result=$customerhome->GetCattodropdown();
			 
			                 break;
                        }

                        case 10:
                            {
                                  session_start();
                                 $id=$_GET['sales'];
                                 $_SESSION["sales"] = $id;
                                 header("Content-type:application/json");
                                 echo json_encode($id);
                                 break;
            
                            }
           

            default:
                break;     
    } 
    
        
    header("Content-type:application/json");
   echo json_encode($result);   
       

 ?>
	
