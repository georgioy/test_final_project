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
                    <!-- <form class="form-inline justify-content-center">

              <div class="menu_div "  >
                            
            <ul>
                <li class="navlink" style="--i: .85s">
     
                            <a href="#" class="menudrop_link"> Menu  <i class="fas fa-caret-down" ></i>  </a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown_link">
                                        <a href="#" >Clothing</a> 
                                     </li>
                                    <li class="dropdown_link">
                                        <a href="#" >Shoes</a>
                                     </li>
                                    <li class="dropdown_link">
                                        <a href="#" >Bags</a> 
                                    </li>
                                    <li class="dropdown_link">
                                        <a href="#" >Others</a> 
                                    </li>
                                    <div class="arrow"> </div>
                                </ul>
                            </div>

                  </li>
            </ul>
 
       
                        </div>
                    </form> -->
 
          


           <div class="loginContainer">
                <div class="login ">
                    <div class="logindiv">
                        <i class="fas fa-user " id="loginimg"></i>
                        <a href="#" class="login_link link" >Login</a>
                    </div>

                    <div class="cartdiv">
                        <i class="fas fa-shopping-cart " id="cartimg"></i>    
                        <a href="#" class="cart_link link"  >Cart</a>
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

<div class="container6">
  <img src="../img/adidas.jpg" alt="Snow" style="width:100%">
  <button class="btn6">Login</button>
  <button class="btnregister">Register Now</button>

  <div class="Image_text_Div">
    <p class="pImg" > Time to <br> <span class="spanimg">Shine!</span> </p>
  </div>

    <p class="pImg2"> Count down to the New Year Style</p>
 
</div>

           <h1>Sales</h1>

    
   
    <script src="..\bootstrap\js\bootstrap.bundle.min.js"></script>
</body>
</html>