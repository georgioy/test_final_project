
  <?php

  require_once("utils2/utils.php");
  
  checkSession();
  ?>


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Home</title>
    <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/css/all.css">
    <link href="css\home.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="..\bootstrap\css\bootstrap.min.css" />
    <script src="..\bootstrap\ajax\jquery.min.js"></script>
    <script src="..\bootstrap\js\bootstrap.min.js"></script>
    <script src="js\home.js"></script>



    
</head>
<body> 

     
       <input type="hidden" class="userHiddenId" id="<?php echo($_GET["uid"]); ?>"   />
      


    
 <header>
     <!-- navbar -->
    <div class="mb-3 container">
        <nav class="navbar navbar-expand-md fixed-top shadow-sm">

        
            <div class="navbar-brand logo logo-container">
                <img src="..\img\logo.jpg" height="65" width="115">
            </div>

            <div class="setting filterbox">
                    <form class="form-inline justify-content-center">
                        <div class=" mt-3">
                            <span class="filterP" >Filter by: </span>
                                <select class="select form-control filter" id="filterBy">
                                    <option disabled selected>select to search</option>
                                    <option value="clothing">Clothing</option>
                                    <option value="shoes">Shoes</option> 
                                    <option value="bags">Bags</option> 
                                    <option value="others">Others</option> 
                                </select>
                        </div>
                    
                    </form>

              </div>
                    
 
          


           <div class="loginContainer">
                <div class="login ">
                    <div class="logindiv">
                        <i class="fas fa-user " id="loginimg"></i>
                        <a href="#" class="login_link link" >Login</a>
                    </div>

                    <div class="cartdiv">
                        <i class="fas fa-shopping-cart " id="cartimg"></i>    
                        <a href="#" class="cart_link link"  >Cart</a>
                        <input type='hidden' class="cartUid" id="<?php echo(checkSession()); ?>"  />
                    </div>

                </div>  
            </div>


            <div class="logout">
               <i class="fas fa-sign-out-alt" id="logoutimg"></i>    
               <a href="#" class="logout_link link"  >Logout</a>
            </div>


      </nav>

    </div>
</header>

<div class="contain6">
  <img src="../img/adidas.jpg" alt="Snow" style="width:100%">
  <button class="btn6">Login</button>
  <button class="btnregister">Register Now</button>

  <div class="Image_text_Div">
    <p class="pImg" > Time to <br> <span class="spanimg">Shine!</span> </p>
  </div>

    <p class="pImg2"> Count down to the New Year Style</p>
 
</div>



    <div>
    <h1>Sales</h1>
    </div>



<section style="background-color: #eee;">
  <div class="container  py-5">
    <div class="row mycontainer">
     
        


    </div>
  </div>

  <div class="moresales">
        <button class="ShowMore " style="vertical-align:middle"><span class="spanbtn">View All Sales </span></button>
        <br>
  </div>


</section>




<div>
    <div class="middleimgDiv">
       <img class="middleImage"   style="width:100%" src="../img/tt_copy.jpg"/> 
    </div>
</div>

    <div>
    <h1> New Arrivals</h1>
    </div>


  <!-- new -->

    <div class="row newArrivals" >


    
            
    </div>

    <div class="moreproducts">
        <br>    <br>
        <button class="ShowMore " style="vertical-align:middle"><span class="spanbtn">View All Products</span></button>
        <br>
  </div>
 
    




   <section style="background-color: #eee;">
  <!-- display categories -->
    <div>  
       <h1> Categories </h1> 
   </div>

    <div class="container " >
        <div class="row categoryCards " style="padding-left:20%; ">

               
                    
                        
                        
        </div>
    </div>

</section>


    <script src="..\bootstrap\js\bootstrap.bundle.min.js"></script>
</body>
</html>