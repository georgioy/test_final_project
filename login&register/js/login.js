$(document).ready(function () {


    //button submit form validation//////////////
    $(document).on('click', '#submit_user', function () {


        var email = $('#email').val();
        var password = $('#password').val();

       
        if (email.length == 0) {
            $('#p0').show();
            $('#p0').text('* Please enter your Email');
            return false;
        }
        else {
            $('#p0').hide();
        }
        if (password.length == 0) {
            $('#p1').show();
            $('#p1').text('* Please enter your Password');
            return false;
        }
        else {
            $('#p1').hide();
        }
        checkifexist(email, password);
    });
    function checkifexist(email,password) {
        var op = 1;
        $.ajax({
            type: 'GET',
            url: "./ws/ws_login.php",
            data: { op: op, email: email, password: password },
            cache: false,
            success: function (data) {
                validate(data);
            },
        });
    }
    function validate(data) {
        if (data == "admin") {
            $('#p2').hide();
            window.location.href = "../admin/products.php";
        }
        if (data == "customer") {
            window.location.href = "../customer/index.php";
        }
        else {
            $('#p2').text('* Incorrect Password or Email!!');
        }
    }


    //get user list from server
    function logout() {
        $.ajax({
            type: 'GET',
            url: "../Utils/ws_utils.php",
            dataType: 'json',
            success: function () {

            },
            error: function (xhr, status, errorThrown) {
                alert(status + errorThrown);
            }
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
        var op = 2;

        $.ajax({
            type: 'GET',
            url: "./ws/ws_login.php",
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





