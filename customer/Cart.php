<?php

  session_start();



  ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cart</title>
	
	  <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/css/all.css">
    <link href="css/Cart.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="..\bootstrap\css\bootstrap.min.css" />
    <script src="..\bootstrap\ajax\jquery.min.js"></script>
    <script src="..\bootstrap\js\bootstrap.min.js"></script>
	<script src="js/Cart.js"></script>
	
	
</head>

<body>
	

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
                        <a href="cart.php" class="cart_link link"  >Cart</a>
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
	
	
	
	
	
	

	<section class="pt-5 pb-5">
  <div class="container">
    <div class="row w-100">
		 <div class="col-lg-12 col-md-12 col-12">
			 <br><br>
		</div>
        <div class="col-lg-12 col-md-12 col-12">
            <h2 class="display-5 mb-2 text-center">Shopping Cart</h2>
            <h5 class="mb-5 text-center" id="num_items">
				
				<!--  show number of items in order -->
                <i class="text-info font-weight-bold" >0</i><b> items in your cart</b></h5>
            <table id="shoppingCart" class="table table-condensed table-responsive">
                <thead>
                    <tr>
						<th style="width:20%">Image</th>
                        <th style="width:30%">Product name</th>
                        <th style="width:12%">Price</th>
                        <th style="width:10%">Quantity</th>
                        <th style="width:16%"></th>
                    </tr>
                </thead>
                <tbody id="carttbody" >
                   
                </tbody>
            </table>
			 <div class="col-lg-12 col-md-12 col-12">
			 <br><br>
		</div>
			<!--  Show total price of the order  -->
            <div class="float-right text-right">
                <h2>Total price:</h2>
                <h3 id="total"></h3>
            </div>
        </div>
    </div>
	  <!--  Order button  -->
    <div class="row mt-4 d-flex align-items-center">
        <div class="col-sm-6 order-md-2 text-right">
            <a href="#" class="btn btn-primary mb-4 btn-lg pl-5 pr-5" id="Order">Order</a>
        </div>
        <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
            <a href="index.php">
                <i class="fas fa-arrow-left mr-2"></i> Continue Shopping</a>
        </div>
    </div>
</div>
</section>
	
   <br><br>
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
	
	
	
</body>
</html>