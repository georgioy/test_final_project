<?php

require_once('../../DAL/DAL.class.php');

   class customerHome{

    //funtction to get products on sale
    public function getSales(){
        $sql = "SELECT * FROM `products` where product_price!=product_final_price AND   status=1 LIMIT 9";
        $db = new DAL();
        $rows = $db->getData($sql);
        return $rows;
    }
 
    //funtcion to get new arrivals
    public function newArrivals(){
        $sql = "SELECT * FROM products where status=1 AND product_price=product_final_price ORDER BY id DESC LIMIT 8";
        $db =  new DAL();
        $rows = $db->getData($sql);
        return $rows;
    }

    ///function to get categories
    public function getCategories(){
        $sql = "SELECT * FROM categories where cat_status=1 ORDER BY cat_id ASC";
        $db = new DAL();
        $result = $db->getData($sql);
        return $result;
    }
   
    
     







   }


?>
