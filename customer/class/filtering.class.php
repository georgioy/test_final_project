<?php 
require_once('../../DAL/DAL.class.php');

  class filtering{

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

///get category name using its id
    public function getCategoryNameById($id){
        $sql = "SELECT * FROM categories where cat_id=$id";
        $db = new DAL();
        $result = $db->getData($sql);
        return $result;
    }



    ///function to get items of specific  category
    public function getCategoryItems($catname){
        $sql = "SELECT * FROM products where product_category='$catname'" ;
        $db = new DAL();
        $result = $db->getData($sql);
        return $result;
    }

    public function getByGender($gender){
        $sql = "SELECT * FROM products where status=1 AND  product_gender='$gender'" ;
        $db = new DAL();
        $result = $db->getData($sql);
        return $result;
    }

    public function getByPriceRange($firstp, $secondp){
        $sql = "SELECT * FROM products where  product_final_price BETWEEN '$firstp'  AND '$secondp' AND status=1 " ;
        $db = new DAL();
        $result = $db->getData($sql);
        return $result;
    }




  }



?>