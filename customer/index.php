
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


    <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/css/all.css">
    <link href="css/Cart.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="..\bootstrap\css\bootstrap.min.css" />
    <script src="..\bootstrap\ajax\jquery.min.js"></script>
    <script src="..\bootstrap\js\bootstrap.min.js"></script>
    
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


<!-- Footer -->
<footer class="bg text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
	  
	  <div>
	  
	  <img src="../img/logo.jpg" style="width: 15% ; height: 15%"  />
	  
	  </div>
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up  with email</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" />
             
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Register
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
       We Provide The Best Online Selection and Delivery of Products to the Lebanese and Middle Eastern Market! Shop your Favorite Categories From: Fashion, Beauty, Home&Kitchen, Accessories, Groceries, Automotive, Tools, Furniture and Much More.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Categories</h5>

          <ul class="list-unstyled mb-0" type="none">
            <li>
              <a href="#!" class="text-white">  Link 1</a>
            </li>
            <li>
               <a href="#!" class="text-white"> Link 1</a>
            </li>
            <li>
               <a href="#!" class="text-white">  Link 1</a>
            </li>
            <li>
               <a href="#!" class="text-white">  Link 1</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
        
		

       
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Explore</h5>

          <ul class="list-unstyled mb-0" type="none">
            <li>
              <a href="#!" class="text-white"> <img src="../img/tick.png" style=" width: 7% ; height: 7% ;"/> Home</a>
            </li>
            <li>
               <a href="#!" class="text-white"> <img src="../img/tick.png" style=" width: 7% ; height: 7% ;"/> Login </a>
            </li>
            <li>
               <a href="#!" class="text-white"> <img src="../img/tick.png" style=" width: 7% ; height: 7% ;"/> Register </a>
            </li>
            <li>
               <a href="#!" class="text-white"> <img src="../img/tick.png" style=" width: 7% ; height: 7% ;"/> About us</a>
            </li>
          </ul>
        </div>
        
		  
		  		 <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        
          <h5 class="text-uppercase">Policies</h5>
          <ul class="list-unstyled mb-0">
           <li>
              <a href="#!" class="text-white"> <img src="../img/tick.png" style=" width: 7% ; height: 7% ;"/> Refund policy  </a>
            </li>
            <li>
               <a href="#!" class="text-white"> <img src="../img/tick.png" style=" width: 7% ; height: 7% ;"/> Privacy policy</a>
            </li>
            <li>
               <a href="#!" class="text-white"> <img src="../img/tick.png" style=" width: 7% ; height: 7% ;"/> Terms of service</a>
            </li>
          
          </ul>
        </div>
        <!--Grid column-->
       
		     <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Trade Services</h5>

          <ul class="list-unstyled mb-0" type="none">
            <li>
              <a href="#!" class="text-white"> <img src="../img/tick.png" style=" width: 7% ; height: 7% ;"/> Trade Assurance</a>
            </li>
            <li>
               <a href="#!" class="text-white"> <img src="../img/tick.png" style=" width: 7% ; height: 7% ;"/>Business Identity</a>
            </li>
            <li>
               <a href="#!" class="text-white"> <img src="../img/tick.png" style=" width: 7% ; height: 7% ;"/> Logistics Service</a>
            </li>
            <li>
               <a href="#!" class="text-white"> <img src="../img/tick.png" style=" width: 7% ; height: 7% ;"/>Inspection Services</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
		  
      </div>
      <!--Grid row-->
		

    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" >Developed by Ghadeer,Hassan and Rida</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->


    <script src="..\bootstrap\js\bootstrap.bundle.min.js"></script>
</body>
</html>