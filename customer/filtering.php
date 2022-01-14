
  <?php

require_once("../Utils/utils.php");
?>


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <title>Home</title>
  <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/css/all.css">
  <link href="css\home.css" rel="stylesheet" type="text/css">
  <link href="css\filtering.css" rel="stylesheet" type="text/css">
  
  <script src="..\bootstrap\ajax\jquery.min.js"></script>
   <link rel="stylesheet" href="..\bootstrap\css\bootstrap.min.css" />
  <script src="..\bootstrap\js\bootstrap.min.js"></script>
  <script src="js\filtering.js"></script>
  <link href="css/Cart.css" rel="stylesheet" type="text/css">

</head>
<body> 
    
<!-- navbar -->
 <div class="mb-3">
      <nav class="navbar navbar-expand-md fixed-top shadow-sm">
          <div class="navbar-brand logo">
              <img src="..\img\logo.jpg" height="65" width="115">
          </div>
          <div class="collapse navbar-collapse mt-3">
              <ul class="navbar-nav ">
                  <li class="">
                      <a class="nav-link" href="index.php"><span class="navbar-brand">Home</span></a>
                  </li>

                  <div class="dropdown">
                           <li class="dropbtn">
                            <a class="nav-link" href="#"><span class="navbar-brand">Categories<i class="fa fa-caret-down"></i> </span></a>
                            </li>
                            <div class="dropdown-content">
                              
                            </div>
                     </div> 
                  
                                            

                  
                </ul>

 
                
              
                <div class="loginContainer">
                    <div class="login ">
                            <div class="logindiv">
                                <i class="fas fa-user " id="loginimg"></i>
                                <a href="..\login&register\login.php" class="login_link link" >Login</a>
                            </div>

                            <div class="cartdiv">
                                <i class="fas fa-shopping-cart " id="cartimg"></i>    
                                <a href="#" class="cart_link link"  >Cart</a>
                                <span class="badge"></span>
                                <input type='hidden' class="cartUid" id=""  />
                            </div>

                    </div>  
            </div>


            <div class="logout">
                <i class="fas fa-sign-out-alt" id="logoutimg"></i>    
                <a href="#" class="logout_link link"  >Logout</a>
            </div>
                
              
          </div>
 
      </nav>

  </div>



<input id="UIDinput"  class="userHiddenId" value="<?php   checkSessionCustomer(); ?>"  />
<input id="UIDinput"  class="userHiddenId"  value="<?php   checkSessionSalesandAll(); ?>"  />

<div class="alert alert-warning" style="display:none; margin-top:45px;" id="cartAdd" class="cartAdd">
   <strong> Please login first. </strong>
  </div>

  <div class="alert alert-success" style="display:none; margin-top:45px;" id="cartAddAccepted" class="cartAdd">
      Item added to your cart.
  </div>  
    


     <h1 id="custP" class="custP">customized paragraph</h1>
     <hr>
    

    <div style="display: flex;">
      <!-- div for gender filter -->
        <div class="genderForm" >
            <p  class="FilterPStyle" >Filter by gender:</p>
            
            <div class="radiogroup radiogroupGender" style="display:inline-block;  ">
                    <div class="wrapper2">
                        <input class="state" type="radio" name="gender" id="male" value="male">
                        <label class="label" for="male">
                        <div class="indicator"></div>
                        <span class="text">Male</span>
                        </label>
                    </div>

                    <div class="wrapper2"  >
                        <input class="state" type="radio" name="gender" id="female" value="female">
                        <label class="label" for="female">
                        <div class="indicator"></div>
                        <span class="text">Female</span>
                        </label>
                    </div>

                    <div class="wrapper2">
                        <input class="state" type="radio" name="gender" id="child" value="child">
                        <label class="label" for="child">
                        <div class="indicator"></div>
                        <span class="text">Child</span>
                        </label>
                    </div>
        
            </div>


            
  </div>  
   
      <div class="PriceRangeForm" style="display:inline-block; margin-left:20%;">
                <p class="FilterPStyle" >Filter by price range:</p>
                
                <div class="radiogroupPrice radiogroup" style="display:inline-block;">
                        <div class="wrapper">
                            <input class="state" type="radio" name="price" id="1to49" value="1to49">
                            <label class="label" for="1to49">
                            <div class="indicator"></div>
                            <span class="text">1$ - 50$</span>
                            </label>
                        </div>

                        <div class="wrapper">
                            <input class="state" type="radio" name="price" id="50to99" value="50to99">
                            <label class="label" for="50to99">
                            <div class="indicator"></div>
                            <span class="text">50$ - 100$</span>
                            </label>
                        </div>

                        <div class="wrapper">
                            <input class="state" type="radio" name="price" id="100to149" value="100to149">
                            <label class="label" for="100to149">
                            <div class="indicator"></div>
                            <span class="text">100$ - 150$</span>
                            </label>
                        </div>

                        <div class="wrapper">
                            <input class="state" type="radio" name="price" id="150to200" value="150to200">
                            <label class="label" for="150to200">
                            <div class="indicator"></div>
                            <span class="text">150$ - 200$</span>
                            </label>
                        </div>

                        
               </div>
  
            </div> 
    </div> 

   
 


   


 




   <!-- new arrivals and category items display -->
    <div class="row newArrivals"  >


    </div>

    <!-- sales div display -->
    <div class="container  py-5">
        <div class="row mycontainer"   >
        

        </div>
    </div>

    

  <script src="..\bootstrap\js\bootstrap.bundle.min.js"></script>
</body>
</html>