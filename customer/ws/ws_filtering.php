<?php

require_once("../class/filtering.class.php");
require_once("../class/Customer_Home.class.php");

    $filtering = new filtering();
    $op=0;
    if(isset($_GET['op'])){
        $op = $_GET['op'];
    }
    session_start();

        switch($op){
            case 1:
                   // session_start();
                    $salesOrAll =  $_SESSION["sales"];
                    header("Content-type:application/json");
            
                    
                    if($salesOrAll == "allSales"){
                        $result = $filtering->getSales();  
                        echo json_encode($result);
                        $wt =  $salesOrAll;
                    }

                break;

            
              case 2:
                   // session_start();
                    $catID =  $_SESSION["catID"];
                    $catname = $filtering->getCategoryNameById($catID);  
                    $result = $filtering->getCategoryItems($catname[0]['cat_name']);
                    header("Content-type:application/json");
            
                    echo json_encode($result); 

            
                break;


              case 3:
                   // session_start();
                    $salesOrAll =  $_SESSION["sales"];
                    header("Content-type:application/json");
                
                    if($salesOrAll == "allProducts"){
                        $result = $filtering->newArrivals();  
                        echo json_encode($result);
                    }
            
                break;

              case 4:
                    $gender = $_GET['gender'];
                    $catname = $_GET['catName'];
                    $result = $filtering->getByGender($gender, $catname);  
                    echo json_encode($result);


                    break;

                case 5:
                    $firstprice = $_GET['firstPrange'];
                    $secondprice = $_GET['secondPrange'];
                    $catname = $_GET['catname'];

                    $result = $filtering->getByPriceRange($firstprice, $secondprice,  $catname);  
                    echo json_encode($result);
    
                    break;

                    case 6:
                        $gender = $_GET['gender'];
                        $saleORallproducts = $_GET['saleORallproducts'];
                        $result = $filtering->getSorPByGender($gender, $saleORallproducts);  
                        echo json_encode($result);
    
                        break;

                        case 7:
                            $firstprice = $_GET['firstPrange'];
                            $secondprice = $_GET['secondPrange'];
                            $saleORallproducts = $_GET['saleORallproducts'];
                            $result = $filtering->getSorPByRange($firstprice, $secondprice, $saleORallproducts);  
                            echo json_encode($result);
            
                            break;

                            case 8:
                                
                                    $result = $filtering->getAllSales();
                                    echo json_encode($result);
                                    break;
                                

            default:
              break;
        }


?>