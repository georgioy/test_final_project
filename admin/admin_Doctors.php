<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Psychiatrists & Psychologists</title>
    <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/css/all.css">
    <link href="css\doctors.css" rel="stylesheet" type="text/css">
    <link href="css\sidebar.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="..\bootstrap\css\bootstrap.min.css" />
    <script src="..\bootstrap\jquery.min.js"></script>
    <script src="..\bootstrap\js\bootstrap.min.js"></script>
    <script src="js\admin_doctors.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
    <div>


        <!--side navbar-->
        <div class="navbar" id="sidNav">

            <nav class="main-menu" id="main-menu">
                <ul>
                    <li>
                        <div class="mt-3 ml-3" id="menubtn">
                            <div id="menushow">
                                <img src="..\images/menu.png" id="menu" width="40" height="40" alt="menu" />
                            </div>
                            <div id="menuhide">
                                <img src="..\images/close.png" id="menuclose" width="40" height="40" alt="menu" />
                            </div>

                        </div>


                    </li>
                </ul>
                <a class="image" href="#">

                    <img class="profile fa-2x" src="..\images\R.png" id="profile" alt="profile" />
                </a>

                <ul>
                    <li>
                        <a href="admin_dashboard.php">
                            <i class="fa fa-home fa-2x ff"></i>
                            <span class="nav-text">
                                Dashboard
                            </span>
                        </a>

                    </li>
                    <li class="has-subnav">
                        <a href="admin_Doctors.php">
                            <i class="fa fa-user-md fa-2x ff"></i>
                            <span class="nav-text">
                                Doctors
                            </span>
                        </a>

                    </li>
                    <li class="has-subnav">
                        <a href="#">
                            <i class="fas fa-procedures fa-2x ff"></i>
                            <span class="nav-text">
                                Patients
                            </span>
                        </a>

                    </li>
                    <li>
                        <a href="admin_calendar.php">
                            <i class="fa fa-calendar-alt fa-2x ff"></i>
                            <span class="nav-text">
                                Calender
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-notes-medical fa-2x ff"></i>
                            <span class="nav-text ">
                                Appointments
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-cash-register  fa-2x ff"></i>
                            <span class="nav-text">
                                Payments
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-chart-pie fa-2x ff"></i>
                            <span class="nav-text">
                                Graphs and Statistics
                            </span>
                        </a>
                    </li>

                </ul>
                <ul class="logout">
                    <li>
                        <a href="#">
                            <i class="fas fa-sign-out-alt ff"></i>
                            <span class="nav-text">
                                Logout
                            </span>
                        </a>
                    </li>
                </ul>

            </nav>


        </div>

        <!--end side navbar-->
        <div class="content ">
            <!-- Page Heading -->
            
            <!-- Content Row -->
            <div class="row">
                
            <div class="row">
            <div>
            <h1 class="h3 mb-4 text-gray-800">Psychiatrists & Psychologists   <label>
            <input id="insearch" class=" form-control mr-sm-2 ml-10" type="text" aria-label="Search" placeholder="Search For Anything">
            </label><br></h1>
            <br>
            <h3 class="h3 mb-4 text-gray-800">Active</h3>
            </div>    
            <div class="row">
              

                        <div id="app_tbody"></div>
                            

                <div class="empty">
                    <div class="no_drs_to_display">
                    <br>
                    <span>No Psychiatrists or Psychologists to display</span>
                    </div>
                </div>
                <div class="col-sm-5">
                    <span id="table_info"></span>
                    
                </div>
            
            </div>
            
              
                <br>
                <div class="row">
                <div class="row">
                <div>
                <br>
                <h3 class="h3 mb-4 text-gray-800">Inactive</h3>
</div>
                </div>    
              

                        <div id="app_tbody_inactive"></div>
                            
                       
       


                <div class="empty1">
                    <div class="no_drs_to_display">
                    <br>
                    <span>No Psychiatrists or Psychologists to display</span>
                    <div>
                </div>
                <div class="col-sm-5">
                    <span id="table_info"></span>
                    
                </div>
            </div>
    </div>
        
       
                

       
            
        

    <script type="text/javascript">
        $(".startalt").hide();
        $(".endalt").hide();
        $(".statusalt").hide();
        var menu = document.getElementById("main-menu");
        var menushow = document.getElementById("menushow");
        var menuclose = document.getElementById("menuhide");
        menuclose.style.visibility = "hidden";
        menuclose.style.display = "none";
        //hide and show image close and menu in navbar
        menushow.onclick = function () {
            menu.style.visibility = "visible";
            menushow.style.visibility = "hidden";
            menushow.style.display = "none";
            menuclose.style.visibility = "visible";
            menuclose.style.display = "disable";
            $("#menuhide").show();
        }
        menuclose.onclick = function () {
            menu.style.visibility = "hidden";
            menushow.style.visibility = "visible";
            menushow.style.display = "disable";
            menuclose.style.visibility = "hidden";
            menuclose.style.display = "none";
            $("#menushow").show();
        }


        $(document).ready(function () {
            $('.Asave').hide();
        });
    </script>
</body>
</html>
