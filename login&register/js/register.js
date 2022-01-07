$(document).ready(function () {


    //button submit form validation//////////////
    $(document).on('click', '#submit_customer', function () {
        
        var username = $('#username').val();
        var phone_number = $('#phone_number').val();
        var address = $('#address').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var confirm_password = $('#confirm_password').val();

        if (username.length == 0) {
            $('#p0').show();
            $('#p0').text('* Please enter your Username');
            return false;
        }
        else  {
            $('#p0').hide();
        }
        if (phone_number.length == 0 ) {
            $('#p1').show();
            $('#p1').text('* Please enter your Phone Number');
            return false;
        }
        else  {
            $('#p1').hide();
        }
        if (address.length == 0) {
            $('#p2').show();
            $('#p2').text('* Please enter your Address');
            return false;
        }
        else {
            $('#p2').hide();
        }
        if (email.length == 0) {
            $('#p3').show();
            $('#p3').text('* Please enter your Email');
            return false;
        }
        else {
            $('#p3').hide();
        }
        if (password.length == 0) {
            $('#p4').show();
            $('#p4').text('* Please enter your Password');
            return false;
        }
        else{
            $('#p4').hide();
        }

        if (confirm_password.length == 0) {
            $('#p5').show();
            $('#p5').text('* Please Confirm your Password');
            return false;
        }
        
        if (password != confirm_password) {
            $('#p5').show();
            $('#p5').text('* Please Confirm your Password');
            return false;
        }
        else {
            $('#p5').hide();
        }
        CheckUser(username, phone_number, address, email, password);
        get_costumer_id(email);
    });
    //function add customer user to ws/////////////////
    function AddCustomer(username, phone_number, address, email, password) {
        var status = 1;
        var user_type = 'customer';
        var op = 1;
        $.ajax({
            type: 'GET',
            url: "./ws/ws_register.php",
            data: { op: op, username: username, phone_number: phone_number, address: address, email: email, password: password, status: status, user_type: user_type },
            cache: false,
            success: function (response) {
            },
        });
    }
    function get_costumer_id() {
        var op = 3;
        $.ajax({
            type: 'GET',
            url: "./ws/ws_register.php",
            data: { op: op},
            cache: false,
            success: function (data) {
            },
        });
    }
    function CheckUser(username, phone_number, address, email, password) {
        var op = 2;
        $.ajax({
            type: 'GET',
            url: "./ws/ws_register.php",
            data: { op: op, email: email },
            cache: false,
            success: function (data) {
                if (data == 0) {
                    AddCustomer(username, phone_number, address, email, password);
                    window.location.href = "../customer/index.php";
                }
                else {
                    $('#p6').text('* This Email already exist!');
                }
                
            },
        });


    }

    getCatToDropDown();

    // Fill categories list in navbar 

    function parseCatToDropDown(data) {


        $.each(data, function (index, row) {
            var name = $(".dropdown-content").innerHTML = "<a href=''  id='Filter_" + row.cat_id + "'> " + row.cat_name + "</a>";
            $(".dropdown-content").append(name);
        });


    }

    function getCatToDropDown() {
        var op = 4;

        $.ajax({
            type: 'GET',
            url: "./ws/ws_register.php",
            data: ({
                op: op
            }),

            dataType: 'json',
            timeout: 5000,
            success: function (data, textStatus, xhr) {

                if (data == -1)
                    alert("Data couldn't be loaded!");
                else {


                    parseCatToDropDown(data);
                }
            },

        });

    }

});



