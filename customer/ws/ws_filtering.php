<?php

require_once("../class/filtering.class.php");
require_once("../class/Customer_Home.class.php");

    $filtering = new filtering();
    $op=0;
    if(isset($_GET['op'])){
        $op = $_GET['op'];
    }

        switch($op){
            case 1:
                    session_start();
                    $salesOrAll =  $_SESSION["sales"];
                    header("Content-type:application/json");
            
                    
                    if($salesOrAll == "allSales"){
                        $result = $filtering->getSales();  
                        echo json_encode($result);
                        $wt =  $salesOrAll;
                    }

                break;

            
              case 2:
                    session_start();
                    $catID =  $_SESSION["catID"];
                    $catname = $filtering->getCategoryNameById($catID);  
                    $result = $filtering->getCategoryItems($catname[0]['cat_name']);
                    header("Content-type:application/json");
            
                    echo json_encode($result); 
                    session_destroy();
                    
            
                break;


              case 3:
                    session_start();
                    $salesOrAll =  $_SESSION["sales"];
                    header("Content-type:application/json");
                
                    if($salesOrAll == "allProducts"){
                        $result = $filtering->newArrivals();  
                        echo json_encode($result);
                        session_destroy();
                    }
            
                break;

              case 4:
                    $gender = $_GET['gender'];
                    $result = $filtering->getByGender($gender);  
                    echo json_encode($result);

                    break;

                case 5:
                    $firstprice = $_GET['firstPrange'];
                    $secondprice = $_GET['secondPrange'];

                    $result = $filtering->getByPriceRange($firstprice, $secondprice);  
                    echo json_encode($result);
    
                    break;

            default:
              break;
        }




// checkSession();
function checkSession()
{
    session_start();
     if(isset($_SESSION["catID"]))
		{
			$catid=$_SESSION["catID"];
			//header("Location:https:www.edureka.co/");
			
		//	echo "categoryid=$catid";
		}
		else
		echo("no cat id");

        
        if(isset($_SESSION["sales"]))
		{
			$Uid=$_SESSION["sales"];
			//$uname=$_SESSION["uname"];
			//header("Location:https:www.edureka.co/");
			//echo "sale=$Uid";
		}
		else
		echo("no sales ");

    }
 



?>