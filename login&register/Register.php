<?php

session_start();
session_unset();
session_destroy();

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="..\bootstrap\css\bootstrap.min.css" />
    <script src="..\bootstrap\jquery.min.js"></script>
    <script src="..\bootstrap\js\bootstrap.min.js"></script>
         <script src="..\bootstrap\js\jquery.bootstrap-growl.min.js"></script>
    <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/css/all.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="..\customer\css\Cart.css">

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
                        <a class="nav-link" href="../customer/index.php"><span class="navbar-brand">Home</span></a>
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
                        <i class="fas fa-user-plus" id="cartimg"></i>   
                        <a href="Register.php" class="cart_link link"  >Register</a>
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
    <div class="limiter">
        <div class="container-login">
            <div class="wrap-login">
                <form class="login-form validate-form mt-0" id="form" method="post">
                    <span class="login-form-title" >
                        Sign Up
                    </span>
                    <div class="mt-1">
                        <div class="wrap-input validate-input">
                            <input class="input" type="text" id="username" name="username" placeholder="Username">
                        </div>
                        <p class="text-left text-danger mb-0" id="p0"></p>

                        <div class="wrap-input validate-input mt-3" >
                            <input class="input" type="number" id="phone_number" name="phone_number" placeholder="Phone Number (+961)">
                        </div>
                       <p class="text-left text-danger mb-0" id="p1"></p>

                       <div class="wrap-input validate-input mt-3">
                            
                            <input class="input" type="text" id="address" name="address" placeholder="Address">
                        </div>
                        <p class="text-left text-danger mb-0" id="p2"></p>

                        <div class="wrap-input validate-input mt-3">
                            <input class="input" type="email" id="email" name="email" placeholder="Email">
                            
                        </div>
                        <p class="text-left text-danger mb-0" id="p3"></p>

                        <div class="wrap-input validate-input mt-3">
                            <input class="input" type="password" id="password" name="password" placeholder="Password"> 
                        </div>
                        <p class="text-left text-danger mb-0" id="p4"></p>

                        <div class="wrap-input validate-input mt-3">
                            <input class="input" type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password">  
                        </div>
                        <p class="text-left text-danger mb-0" id="p5"></p>
                    </div>

                    <div class="container-login-form-btn mt-3">
                        <div class="wrap-login-form-btn">
                            <button type="button" id="submit_customer" class="login-form-btn"> Create an account </button>
                        </div>
                    </div>
                    <p class="text-center text-danger mt-0" id="p6"></p>
                    <div class="text-center">
                        <span class="txt1">
                            I have an account.
                        </span>
                        <a class="txt2" href="login.php"> Sign In </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="..\bootstrap\js\bootstrap.min.js"></script>
    <script src="js/Register.js"></script>
</body>
</html>