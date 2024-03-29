<?php

require("../Utils/utils.php");

checkSessionAdmin();

?>


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>View Order</title>
    <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/css/all.css">
    <link href="css\view_order.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="..\bootstrap\css\bootstrap.min.css" />
    <script src="..\bootstrap\ajax\jquery.min.js"></script>
    <script src="..\bootstrap\js\bootstrap.min.js"></script>
    <script src="js\view_order.js"></script>

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
                          <a class="nav-link" href="Products.php"><span class="navbar-brand">Products</span></a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="Admin_Categories.php"><span class="navbar-brand">Categories</span></a>
                    </li>
                </ul>
            </div>
            <div id="sideNav">
                <nav>
                    <ul class="mt5">
                        <li><a href="Customers.php">CUSTOMERS</a></li>
                        <li><a href="ordered.php">ORDERED</a></li>
                        <li><a href="Statistics.php">STATISTICS</a></li>
                        <li><a href="logins_register.php">LOGIN REGISTER</a></li>
                        <li><a href="..\login&register\Login.php">LOGOUT</a></li>
                    </ul>
                </nav>
            </div>
            <div class="mt-3" id="menubtn">
                <img src="..\img/menu.png" id="menu" />
            </div>
        </nav>

    </div>
    <!-- title -->
    <div class="title-text">
        <h1>View Order</h1>
    </div>
     <!-- Customer information -->
    
     <h4 class="ml-3">Customer Information</h4>
    <div id="Customer_info" class="mb-5">
    <div class="ml-3" id="i_username"></div>
    <div class="ml-3"  id="i_Phone"></div>
    <div class="ml-3"  id="i_email"></div>
    <div class="ml-3"  id="i_address"></div>
     
     
     
     </div>
    <!-- table -->
    <div class="col">
        <table class="table table-hover table-bordered mt-2  mr-3 " border="0" id="table">
            <thead>
                <tr>
                    <th scope="col">Product Image</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Category</th>
                    <th scope="col">Product Gender</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total Price</th>
                 </tr>
            </thead>
            <tbody id="orderestable">
            
            </tbody>
        </table>
    </div>
    <div id="control_order">
     <div id="total"></div> 
     <input type="button" id="reject" class="btn btn-danger"  value="Reject Order">
     <input type="button" id="accept" class="btn btn-success"  value="Accept Order">

    

    
    </div>
        <script>
        //side navbar
        var menubtn = document.getElementById("menubtn")
        var sideNav = document.getElementById("sideNav")
        var menu = document.getElementById("menu")
        
        sideNav.style.right = "-250px";
        //hide and show image close and menu in navbar
        menubtn.onclick = function () {
            if (sideNav.style.right == "-250px") {
                sideNav.style.right = "0";
                menu.src = "../img/close.png";
            }
            else {
                sideNav.style.right = "-250px";
                menu.src = "../img/menu.png";
            }
        }  


    </script>
    <script src="..\bootstrap\js\bootstrap.bundle.min.js"></script>
</body>
</html>