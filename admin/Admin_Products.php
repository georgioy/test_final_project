<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Products</title>
    <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/css/all.css">
    <link href="css\products.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="..\bootstrap\css\bootstrap.min.css" />
    <script src="..\bootstrap\ajax\jquery.min.js"></script>
    <script src="..\bootstrap\js\bootstrap.min.js"></script>
    <script src="js\products.js"></script>
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
                        <a class="nav-link" href="products.php"><span class="navbar-brand">Products</span></a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="categories.php"><span class="navbar-brand">Categories</span></a>
                    </li>
                </ul>
            </div>
            <!-- side Nav -->
            <div id="sideNav">
                <nav>
                    <ul class="mt5">
                        <li><a href="customers.php">CUSTOMERS</a></li>
                        <li><a href="#">ORDERED</a></li>
                        <li><a href="#">STOCK</a></li>
                        <li><a href="#">REPORTS</a></li>
                        <li><a href="#">LOGOUT</a></li>
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
        <h1>Products</h1>
    </div>
    <!-- control -->
    <div class="setting">
        <form class="form-inline justify-content-center">
            <div class="card-body mt-3">
                <input type="button" class="btn" data-bs-toggle="modal" data-bs-target="#myModal" value="Add Product">
                <span class="font-weight-bold">Search by: </span>
                <select class="select form-control">
                    <option disabled selected>select to search</option>
                    <option value="categories">Categories</option>
                    <option value="name">Name</option>
                    <option value="quantity">Quantity</option>

                </select>
                <input id="insearch" class="form-control mr-sm-2 ml-10" type="text" placeholder="Search" aria-label="Search">
            </div>
        </form>
    </div>
    <!-- table -->
    <div class="col">
        <table class="table table-hover table-bordered mt-2  mr-3 " border="0" id="productstable">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Categories</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Base Price</th>
                    <th scope="col">Final Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>

            <tbody id="productstbody">
                <tr>
                    <td><img src="..\img/OIP7.jpg" /></td>
                    <td>blue shoes</td>
                    <td>Shoes</td>
                    <td>Male</td>
                    <td>120</td>
                    <td>100$</td>
                    <td>85$</td>
                    <td><i class="fas fa-thumbs-up"></i><i class="fas fa-thumbs-down"></i></td>
                    <td id="action"><button class="actionbtn btn" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fas fa-edit"></i></button> <button class="btn"><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr>
                    <td><img src="..\img/OIP7.jpg" /></td>
                    <td>blue shoes</td>
                    <td>Shoes</td>
                    <td>Male</td>
                    <td>120</td>
                    <td>100$</td>
                    <td>85$</td>
                    <td><i class="fas fa-thumbs-up"></i><i class="fas fa-thumbs-down"></i></td>
                    <td id="action"><button class="actionbtn btn" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fas fa-edit"></i></button> <button class="btn"><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr>
                    <td><img src="..\img/OIP7.jpg" /></td>
                    <td>blue shoes</td>
                    <td>Shoes</td>
                    <td>Male</td>
                    <td>120</td>
                    <td>100$</td>
                    <td>85$</td>
                    <td><i class="fas fa-thumbs-up"></i><i class="fas fa-thumbs-down"></i></td>
                    <td id="action"><button class="actionbtn btn" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fas fa-edit"></i></button> <button class="btn"><i class="fas fa-trash"></i></button></td>
                </tr>

            </tbody>
        </table>
    </div>
   <!-- modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Product</h5>
                    <button class="close btn" style="" data-bs-dismiss="modal">×</button>
                   
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="mb-3">
                            <input type="text" placeholder="Product Name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <select class="select form-control">
                                <option disabled selected>select categories</option>
                                <option value="shoes">shoes</option>
                                <option value="clothing">clothing</option>
                                <option value="bags">bags</option>
                                <option value="others">others</option>

                            </select>
                        </div>
                        <div class="mb-3">
                            <select class="select form-control">
                                <option disabled selected>select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="kids">Kids</option>

                            </select>
                        </div>
                        <div class="mb-3">
                            <input type="number" min="1" placeholder="Quantity" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="number" placeholder="Price in $" min="1" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="number" min="0" placeholder="Discount rate in %" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="file" />
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="addbtn btn">Submit</button>
                        </div>
                        
                    </form>
                </div>

            </div>
        </div>
    </div>








    <script>

        var menubtn = document.getElementById("menubtn")
        var sideNav = document.getElementById("sideNav")
        var menu = document.getElementById("menu")

        sideNav.style.right = "-250px";

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

        $('.fa-thumbs-down').hide();
                    //$('.fa-thumbs-down').show();


    </script>
    <script src="..\bootstrap\js\bootstrap.bundle.min.js"></script>
</body>
</html>