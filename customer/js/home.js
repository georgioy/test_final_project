$(document).ready(function () {





    getCatToDropDown();

    // Fill categories list in navbar 

    function parseCatToDropDown(data) {


        $.each(data, function (index, row) {
            var name = $(".dropdown-content").innerHTML = "<a href='' class='dropdownCat'  id='" + row.cat_id + "'> " + row.cat_name + "</a>";
            $(".dropdown-content").append(name);
        });


    }
    function getCatToDropDown() {
        var op = 9;

        $.ajax({
            type: 'GET',
            url: "./ws/ws_customerHome.php",
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





    
         ////////////////////////cat drop down redirect to filtering////////////////////////added
         $(document).on('click', '.dropdownCat', function(){
            
            var id = $(this).attr("id");
         //  alert(id);
            var dropValue = $(this).text().trim();
            selecteddrop = dropValue;
            
                    var op=6;
                    $.ajax({
                        type: 'GET',
                        url: "./ws/ws_customerHome.php",
                        dataType: 'json',
                        data: { op: op, catID: id },
                        success: function (response) {
                        },

                    });
                    window.location.href = "http://localhost/final1/f1/test_final_project/customer/filtering.php";

                    return false;
               
        });






    var userid = $('.userHiddenId').val();
   // alert(userid);
    senduserID();
    function senduserID(){
        var id = userid;

          var op=7;
          $.ajax({
              type: 'GET',
              url: "./ws/ws_customerHome.php",
              dataType: 'json',
              data: { op: op, userId: id },
              success: function (response) {
              },

          });

          return false;
    }


    getSales();
    ////get all customers function
    function getSales(){
        var op=1;
        $.ajax({
            type: 'GET',
            url: "./ws/ws_customerHome.php",
            dataType: 'json',
            data: {op: op},
            success: function (response) {
                if (response == -1)
                    alert("Data couldn't be loaded!");
                else {
                    parseSales(response);
                }
            },
        });
    }
    
    function parseSales(response){
        var len = response.length;
        var container = document.querySelector(".mycontainer");


        for(var i=0; i<len; i++){
            var id = response[i].id;
            var product_name = response[i].product_name;
            var product_price = response[i].product_price;
            var product_final_price = response[i].product_final_price;
            var product_image = response[i].product_image;


            var Pimage = '<a href="#" class="image"  style="width:200px; height:200px; margin-left:25px;"' + '>';
            Pimage += '<img src="../product_image/'    +  product_image + '"' ; 
            Pimage += '/>';
            Pimage += '</a>'

            
            var addToCart = '<a  id="'+id+'" href="" class="  addtoArray getsale add-to-cart" >';
            addToCart += 'Add To Cart';
            addToCart += '</a>';
            
            var productName = '<h3 class="title" > ';
            productName += '<a href="" >' + product_name + '</a>';
            productName += '</h3>';

            var Productprice =  '<div class="price" > ' + product_final_price + '$' + '</div>'; 
            var ProductOldprice =  '<div class="small text-danger" > ' 
            ProductOldprice += '<s>' ;
            ProductOldprice +=  product_price + '$';
            ProductOldprice += '</s>' + '</div>'; 

            var input4id = '<input type="hidden" id="'+id+'" >';

       
      
            container.innerHTML+='<div  class="col-md-3 col-sm-6" style="padding:20px;"><div class="product-grid">'+
            '<div class="product-image" >' + Pimage + addToCart + '</div>' + 
            '<div class="product-content" >' +  productName + ProductOldprice +  Productprice + '</div> '
              +'</div></div>';

       
         } 


    }

  

});
 

 

$(document).ready(function(){

    getNewArrivals();
    ////get all customers function
    function getNewArrivals(){
        var op=2;
        $.ajax({
            type: 'GET',
            url: "./ws/ws_customerHome.php",
            dataType: 'json',
            data: {op: op},
            success: function (response) {
                if (response == -1)
                    alert("Data couldn't be loaded!");
                else {
                    parseNew(response);
                }
            },
            error: function (xhr, status, errorThrown) {
                alert(status + errorThrown);
            }
        });
    }
    
    function parseNew(response){
        var len = response.length;
        var container = document.querySelector(".newArrivals");


        for(var i=0; i<len; i++){
            var id = response[i].id;
            var product_name = response[i].product_name;
            var product_category = response[i].product_category;
            var product_price = response[i].product_price;
            var product_final_price = response[i].product_final_price;
            var product_image = response[i].product_image;
            var product_quantity = response[i].product_quantity;

          
            var Pimage = '<a href="#" class="image"  style="width:200px; height:200px; margin-left:120px;"' + '>';
            Pimage += '<img src="../product_image/'    +  product_image + '"' ; 
            Pimage += '/>';
            Pimage += '</a>'

            
            var addToCart = '<a  id="'+id+'" href="" class="addarrival addtoArray add-to-cart" >';
            addToCart += 'Add To Cart';
            addToCart += '</a>';
            
            var productName = '<h3 class="title" > ';
            productName += '<a href="" >' + product_name + '</a>';
            productName += '</h3>';

            var Productprice =  '<div class="price" > ' + product_price + '$' + '</div>'; 
            var input4id = '<input type="hidden" id="'+id+'" >';

            
        
      
            container.innerHTML += '<div  class="col-md-3 col-sm-6" style="padding:20px;"><div class="product-grid">'+
            '<div class="product-image" >' + Pimage + addToCart + '</div>' + 
            '<div class="product-content" >' +  productName + Productprice + '</div> '
              +'</div></div>';

         } 
    }

});



//    fill category cards


$(document).ready(function(){

    getCategories();
    ////get all customers function
    function getCategories(){
        var op=3;
        $.ajax({
            type: 'GET',
            url: "./ws/ws_customerHome.php",
            dataType: 'json',
            data: {op: op},
            success: function (response) {
                if (response == -1)
                    alert("Data couldn't be loaded!");
                else {
                    parseCategories(response);
                }
            },
            error: function (xhr, status, errorThrown) {
                alert(status + errorThrown);
            }
        });
    }
    
    function parseCategories(response) {
        var len = response.length;
        var container = document.querySelector(".categoryCards");


        for (var i = 0; i < len; i++) {
            var id = response[i].cat_id;
            var cat_name = response[i].cat_name;
            var cat_status = response[i].cat_status;
            var cat_image = response[i].cat_image;


            var catimage = "<img style='width: 100% ; height: 100%' class='img img-responsive' src='../img/" + cat_image + "'\>";


            // alert(divv);
            var catLink = '<a  href="" class="stretched-link getcat"   id="' + id + '" >';
            catLink += '<input type="hidden" class="getcat"    >'
            catLink += '</a>';


            var catnameDiv = '<div style:"color:black;" class="profile-name">';
            catnameDiv += cat_name;
            catnameDiv += '</div>';




            var divv = '<div class="profile-card-6" style:"width: 900px ; height: 700px ">';
            divv += catimage;
            divv += catnameDiv;
            divv += catLink;
            divv += '</div>';


            if (i % 2 == 1) {
                container.innerHTML += '<div class=" col-md-4" style="padding-left:4%;">' +
                    divv
                    + '</div> ' + '<div class="col-xl-12 "></div>';
            } else {
                container.innerHTML += '<div class="col-md-4"  style="padding-left:4%;" >' +
                    divv
                    + '</div> ';
            }

        }
    }

}); 

$(document).ready(function(){
    $(document).on('click', '.cartdiv', function(){
 

        var userid = $('.userHiddenId').val();
      //  alert(userid);
        if (userid == "") {
            $('.userHiddenId').val() = '';
             window.location.href = "../login&register/Login.php";
            
            
        } else {
           window.location.href = "../customer/cart.php";
        }
    });




       $(document).on('click', '.btn6', function () {
           window.location.href = "../login&register/Login.php";

       });
       $(document).on('click', '.btnregister', function () {
           window.location.href = "../login&register/Register.php";

       });
});






$(document).ready(function(){

    ///show more send to ws
    $(document).on('click', '.ShowMore', function(){
        var id = $(this).attr("id");
     //  alert(id);
        var op=10;
        $.ajax({
            type: 'GET',
            url: "./ws/ws_customerHome.php",
            dataType: 'json',
            data: { op: op, sales: id },
            success: function (response) {
            },
    
        });
       window.location.href = "http://localhost/final1/f1/test_final_project/customer/filtering.php";

        return false;
    
    });
});








////hide login icon id user is logged in
$(document).ready(function(){
    var userid = $('.userHiddenId').val();
    // alert(userid);
     if (userid == "") {
       //  alert("no id"); 
     } else {
         $(".logindiv").hide();
         $(".btn6").hide();
         $(".btnregister").hide();
         $(".logout").show();


    }  
});

//open filtered when clicking on cat card
$(document).on('click', '.getcat', function(){
    var id = $(this).attr("id");
 //   alert(id);
    var op=6;
    $.ajax({
        type: 'GET',
        url: "./ws/ws_customerHome.php",
        dataType: 'json',
        data: { op: op, catID: id },
        success: function (response) {
        },

    });
    window.location.href = "http://localhost/final1/f1/test_final_project/customer/filtering.php";

    return false;

});


    ////////////function to add cards to the cart when clicking add to card btns if logged in and show log in msg if not
    $(document).ready(function(){
        $(document).on('click', '.addtoArray', function(){
            var value = $('#UIDinput').val();
         //   alert(value);
                if(value == ""){
                   // alert("no user");
                    ///show please login message
                    const targetDiv = document.getElementById("cartAdd");
                    targetDiv.style.display = "block";
                    $("#cartAdd").fadeOut(4000);

                }else{
                   // alert("userLogged");
                    ///show item added to cart message
                    const targetDiv1 = document.getElementById("cartAddAccepted");
                    targetDiv1.style.display = "block";
                    $("#cartAddAccepted").fadeOut(3000);
                    var id = $(this).attr("id");

                    var op=8;
                    $.ajax({
                        type: 'GET',
                        url: "./ws/ws_customerHome.php",
                        dataType: 'json',
                        data: { op: op, PId: id },
                        success: function (response) {
                        },
        
                    });
                }
            return false;
        });
     
     });