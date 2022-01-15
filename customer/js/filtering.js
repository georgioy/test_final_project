
    $(document).ready(function () {
        
    //////drop down lu categories
        getCatToDropDown1();

        // Fill categories list in navbar dropdown

        function parseCatToDropDown1(data) {

            $.each(data, function (index, row) {
                var name = $(".dropdown-content").innerHTML = "<a href=''  class='dropdownCat'  id='" + row.cat_id + "'> " + row.cat_name + "</a>";
            
                $(".dropdown-content").append(name);
            });
        var name1 = $(".dropdown-content").innerHTML = "<a href='' class='dropdownCat'  onclick='linkClick()' id='Filter_" + 1 + "'> " + "Sales" + "</a>";
        var name2 = $(".dropdown-content").innerHTML = "<a href=''  class='dropdownCat'  id='Filter_" + 1 + "'> " + "All products" + "</a>";

                $(".dropdown-content").append(name1);
                $(".dropdown-content").append(name2);

        }

        ///get categories list from db
        function getCatToDropDown1() {
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
                        parseCatToDropDown1(data);
                    }
                },

            });

        }
        //logout
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
        $(document).on('click', '.logout', function () {
            logout();
            window.location.href = "./index.php";

        });

        ////////////////////////cat drop down redirect to filtering////////////////////////
        $(document).on('click', '.dropdownCat', function(){
            var id = $(this).attr("id");
            var dropValue = $(this).text().trim();
            selecteddrop = dropValue;
            
                if("Sales" == dropValue){

                    var op=10;
                    $.ajax({
                        type: 'GET',
                        url: "./ws/ws_customerHome.php",
                        dataType: 'json',
                        data: { op: op, sales: "sales"},
                        success: function (response) {
                        },

                    });
                  //  window.location.href = "./filtering.php";

                }else if(dropValue == "All products"){
            
                    var op=10;
                    $.ajax({
                        type: 'GET',
                        url: "./ws/ws_customerHome.php",
                        dataType: 'json',
                        data: { op: op, sales: "allProducts" },
                        success: function (response) {
                        },

                    });
                   // window.location.href = "http://localhost/f1/test_final_project/customer/filtering.php";

                }else{
                    var op=6;
                    $.ajax({
                        type: 'GET',
                        url: "./ws/ws_customerHome.php",
                        dataType: 'json',
                        data: { op: op, catID: id },
                        success: function (response) {
                        },

                    });
                    window.location.href = "./filtering.php";

                    return false;
                }
        });


  });

$(document).ready(function () {

    $('.radiogroupGender input[type="radio"]').click(function hey(){
        var gendervalue = $(this).val();
       $(".mycontainer").empty();
       $(".newArrivals").empty();
        check = gendervalue;
       // alert(gendervalue);
       var TextInsideCustomP = document.getElementById('custP').innerHTML;

      var op=4;
      $.ajax({
          type: 'GET',
          url: "./ws/ws_filtering.php",
          dataType: 'json',
          data: {op: op, gender:gendervalue, catName:TextInsideCustomP},
          success: function (response) {
              if (response == -1)
                  alert("Data couldn't be loaded!");
              else {
                  parseByGender(response);
              }
          },
          error: function (xhr, status, errorThrown) {
            //  alert(status + errorThrown);
          }
      });


      
       ///////get sales or other products filtered by gender
       if(TextInsideCustomP == "SALES" || "ALL PRODUCTS"){
        //  alert("sales OR P it is" + TextInsideCustomP);

          var op=6;
          $.ajax({
              type: 'GET',
              url: "./ws/ws_filtering.php",
              dataType: 'json',
              data: {op: op, gender:gendervalue, saleORallproducts: TextInsideCustomP},
              success: function (response) {
                  if (response == -1)
                      alert("Data couldn't be loaded!");
                  else {
                      if(TextInsideCustomP == "SALES"){
                        parseSales(response);
                        // alert("SSSS");
                      }else if(TextInsideCustomP == "ALL PRODUCTS"){
                         parseNew(response);
                      }
                    
                      
                  }
              },
              error: function (xhr, status, errorThrown) {
                  //  alert(status + errorThrown);
              }
          });

  }

     });


     function parseByGender(response){
        var len = response.length;
       $(".newArrivals").empty();
       $(".mycontainer").empty();
       document.getElementById("custP").innerHTML =  (response[0].product_category).toUpperCase() ;
    
        var container = document.querySelector(".newArrivals");
    
    
        for(var i=0; i<len; i++){
            var id = response[i].id;
            var product_name = response[i].product_name;
            var product_category = response[i].product_category;
            var product_price = response[i].product_price;
            var product_final_price = response[i].product_final_price;
            var product_image = response[i].product_image;
            var product_quantity = response[i].product_quantity;
            var product_gender = response[i].product_gender;
    
            var Pimage = '<a href="#" class="image"  style="width:200px; height:200px; margin-left:50px;"' + '>';
            Pimage += '<img src="../product_image/'    +  product_image + '"' ; 
            Pimage += '/>';
            Pimage += '</a>'
    
            
            var addToCart = '<a  id="'+id+'" href="" class="addarrival addtoArray add-to-cart" >';
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
            
          var extraspace = '<div style="height:21px;"></div>';

            if(product_price == product_final_price){
            container.innerHTML += '<div  class="col-md-3 col-sm-6" style="padding:20px;"><div class="product-grid">'+
            '<div class="product-image" >' + Pimage + addToCart + '</div>' + 
            '<div class="product-content" >' +  productName + extraspace  + Productprice + '</div> '
                +'</div></div>';
            }else{
                container.innerHTML += '<div  class="col-md-3 col-sm-6" style="padding:20px;"><div class="product-grid">'+
            '<div class="product-image" >' + Pimage + addToCart + '</div>' + 
            '<div class="product-content" >' +  productName + ProductOldprice + Productprice + '</div> '
                +'</div></div>'; 
            }
    
    
         } 
    
       
    }


    $('.radiogroupPrice input[type="radio"]').click(function hey(){
         
          var priceVal = $(this).val().trim();
           $(".mycontainer").empty();
           $(".newArrivals").empty();
           var TextInsideCustomP = document.getElementById('custP').innerHTML;

    
            var beforeT=priceVal.indexOf("to");
            var firstPrange =   priceVal.substring(0, beforeT);
            var afterO=priceVal.indexOf("o");
            var secondPrange = priceVal.substring(afterO+1, priceVal.length);
      
            var op=5;
                $.ajax({
                    type: 'GET',
                    url: "./ws/ws_filtering.php",
                    dataType: 'json',
                    data: {op: op, firstPrange : firstPrange, secondPrange : secondPrange, catname:TextInsideCustomP},
                    success: function (response) {
                        if (response == -1)
                            alert("Data couldn't be loaded!");
                        else {
                            parseByPrice(response);
                        }
                    },
                    error: function (xhr, status, errorThrown) {
                          alert(status + errorThrown);
                    }
                });

                            ///////get sales or other products filtered by price
        if(TextInsideCustomP == "SALES" || "ALL PRODUCTS"){
            //  alert("sales OR P it is" + TextInsideCustomP);
  
              var op=7;
              $.ajax({
                  type: 'GET',
                  url: "./ws/ws_filtering.php",
                  dataType: 'json',
                  data: {op: op, firstPrange : firstPrange, secondPrange : secondPrange, saleORallproducts: TextInsideCustomP},
                  success: function (response) {
                      if (response == -1)
                          alert("Data couldn't be loaded!");
                      else {
                          if(TextInsideCustomP == "SALES"){
                            parseSales(response);
                            // alert("SSSS");
                          }else if(TextInsideCustomP == "ALL PRODUCTS"){
                             parseNew(response);
                          }
                        
                          
                      }
                  },
                  error: function (xhr, status, errorThrown) {
                      //  alert(status + errorThrown);
                  }
              });
  
      }
      
    });


     function parseByPrice(response){
        var len = response.length;

       $(".newArrivals").empty();
       $(".mycontainer").empty();
       document.getElementById("custP").innerHTML = (response[0].product_category).toUpperCase();
    
        var container = document.querySelector(".newArrivals");

        
        for(var i=0; i<len; i++){
            var id = response[i].id;
            var product_name = response[i].product_name;
            var product_category = response[i].product_category;
            var product_price = response[i].product_price;
            var product_final_price = response[i].product_final_price;
            var product_image = response[i].product_image;
            var product_quantity = response[i].product_quantity;
            var product_gender = response[i].product_gender;
    
            var Pimage = '<a href="#" class="image"  style="width:200px; height:200px; margin-left:50px;"' + '>';
                Pimage += '<img src="../product_image/'    +  product_image + '"' ; 
                Pimage += '/>';
                Pimage += '</a>'
    
            
            var addToCart = '<a  id="'+id+'" href="" class="addarrival addtoArray add-to-cart" >';
            addToCart += 'Add To Cart';
            addToCart += '</a>';
            
            var productName = '<h3 class="title" > ';
            productName += '<a href="" >' + product_name + '</a>';
            productName += '</h3>';
    
            var Productprice =  '<div class="price" > ' + product_final_price + '$' + '</div>'; 
            var input4id = '<input type="hidden" id="'+product_gender+'" >';
    
           var ProductOldprice =  '<div class="small text-danger" > ' 
           ProductOldprice += '<s>' ;
           ProductOldprice +=  product_price + '$';
           ProductOldprice += '</s>' + '</div>'; 
            
           var extraspace = '<div style="height:21px;"></div>';
 

            if(product_price == product_final_price){ 
            container.innerHTML += '<div  class="col-md-3 col-sm-6" style="padding:20px;"><div class="product-grid">'+
            '<div class="product-image" >' + Pimage + addToCart + '</div>' + 
            '<div class="product-content" >' +  productName + extraspace   + Productprice + '</div> '
                +'</div></div>';
            }else{ 
                container.innerHTML += '<div  class="col-md-3 col-sm-6" style="padding:20px;"><div class="product-grid">'+
            '<div class="product-image" >' + Pimage + addToCart + '</div>' + 
            '<div class="product-content" >' +  productName + ProductOldprice + Productprice + '</div> '
                +'</div></div>'; 
            }
    
         } 
    
    }
    
});



$(document).ready(function(){

    getNewArrivals();

    function getNewArrivals(){
       var op=3;
        $.ajax({
            type: 'GET',
            url: "./ws/ws_filtering.php",
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
              //  alert(status + errorThrown);
            }
        });
    }
    
   

});

function parseNew(response){
    var len = response.length;
   $(".newArrivals").empty();
   $(".mycontainer").empty();
   document.getElementById("custP").innerHTML = "ALL PRODUCTS";

    var container = document.querySelector(".newArrivals");


    for(var i=0; i<len; i++){
        var id = response[i].id;
        var product_name = response[i].product_name;
        var product_category = response[i].product_category;
        var product_price = response[i].product_price;
        var product_final_price = response[i].product_final_price;
        var product_image = response[i].product_image;
        var product_quantity = response[i].product_quantity;
        var product_gender = response[i].product_gender;

        var Pimage = '<a href="#" class="image"  style="width:200px; height:200px; margin-left:50px;"' + '>';
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

        
  
         container.innerHTML += '<div  class="col-md-3 col-sm-6" style="padding:20px;"><div class="product-grid">'+
        '<div class="product-image" >' + Pimage + addToCart + '</div>' + 
        '<div class="product-content" >' +  productName + Productprice + '</div> '
          +'</div></div>';

     } 

 }

    getSales();
    ////get all sales function
        function getSales(){
    
            var op=8;
            $.ajax({
                type: 'GET',
                url: "./ws/ws_filtering.php",
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
        document.getElementById("custP").innerHTML = "SALES";

        $(".mycontainer").empty();

    
        for(var i=0; i<len; i++){
            var id = response[i].id;
            var product_name = response[i].product_name;
            var product_price = response[i].product_price;
            var product_final_price = response[i].product_final_price;
            var product_image = response[i].product_image;
            var product_gender = response[i].product_gender;


            var Pimage = '<a href="#" class="image"  style="width:200px; height:200px; margin-left:25px;"' + '>';
            Pimage += '<img src="../product_image/'    +  product_image + '"' ; 
            Pimage += '/>';
            Pimage += '</a>'

            
            var addToCart = '<a  id="'+id+'" href="" class="addtoArray getsale add-to-cart" >';
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

    
            var input4id = '<input type="hidden" id="'+product_gender+'" >';

            container.innerHTML+='<div  class="col-md-3 col-sm-6" style="padding:20px;"><div class="product-grid">'+
            '<div class="product-image" >' +input4id+ Pimage + addToCart + '</div>' + 
            '<div class="product-content" >' +  productName + ProductOldprice +  Productprice + '</div> '
            +'</div></div>';

        } 

    
        

    }

    $(document).ready(function(){

        getCatItems();
        ////get all categories function
        function getCatItems(){
        var op=2;
            $.ajax({
                type: 'GET',
                url: "./ws/ws_filtering.php",
                dataType: 'json',
                data: {op: op},
                success: function (response) {
                    if (response == -1)
                        alert("Data couldn't be loaded!");
                    else {
                        parseItems(response);
                    }
                },
                error: function (xhr, status, errorThrown) {
                // alert(status + errorThrown);
                }
            });
        }
        
        function parseItems(response){
            var len = response.length;
            $(".newArrivals").empty();
            $(".mycontainer").empty();
            document.getElementById("custP").innerHTML = (response[0].product_category).toUpperCase();
    
            var container = document.querySelector(".newArrivals");
    
            for(var i=0; i<len; i++){
                var id = response[i].id;
                var product_name = response[i].product_name;
                var product_category = response[i].product_category;
                var product_price = response[i].product_price;
                var product_final_price = response[i].product_final_price;
                var product_image = response[i].product_image;
                var product_quantity = response[i].product_quantity;
                var product_gender = response[i].product_gender;
              //  alert(response.length());

            
                var Pimage = '<a href="#" class="image"  style="width:200px; height:200px; margin-left:50px;"' + '>';
                Pimage += '<img src="../product_image/'    +  product_image + '"' ; 
                Pimage += '/>'
                Pimage += '</a>';

                
                var addToCart = '<a  id="'+id+'" href="" class="addarrival addtoArray add-to-cart" >';
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

                var extraspace = '<div style="height:21px;"></div>';

                if(product_price == product_final_price){ 
                    container.innerHTML += '<div  class="col-md-3 col-sm-6" style="padding:20px;"><div class="product-grid">'+
                    '<div class="product-image" >' + Pimage + addToCart + '</div>' + 
                    '<div class="product-content" >' +  productName + extraspace   + Productprice + '</div> '
                        +'</div></div>';
                    }else{ 
                        container.innerHTML += '<div  class="col-md-3 col-sm-6" style="padding:20px;"><div class="product-grid">'+
                    '<div class="product-image" >' + Pimage + addToCart + '</div>' + 
                    '<div class="product-content" >' +  productName + ProductOldprice + Productprice + '</div> '
                        +'</div></div>'; 
                    }
            
            } 
        }

    });



    /////login and register btns in image redirect//////
    $(document).on('click', '.btn6', function () {
        window.location.href = "../login&register/Login.php";

    });
    $(document).on('click', '.btnregister', function () {
        window.location.href = "../login&register/Register.php";

    });

    ////hide login icon if user is logged in and show logout
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
var counter = 0
     ////////////function to add cards to the cart when clicking add to card btns if logged in and show log in msg if not
     $(document).ready(function(){
        $(document).on('click', '.addtoArray', function(){
            var value = $('#UIDinput').val();
                if(value == ""){
                    ///show please login message
                    const targetDiv = document.getElementById("cartAdd");
                    targetDiv.style.display = "block";
                    $("#cartAdd").fadeOut(4000);

                }else{
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
            counter += 1;
            if (counter > 0) {
                $(".badge").text(counter);
            }
            return false;
        });
     
     });
 
     $(document).ready(function(){

        $(document).on('click', '.cartdiv', function(){
 

            var userid = $('.userHiddenId').val();
           // alert(userid);
            if (userid == "") {
                $('.userHiddenId').val() = '';
                 window.location.href = "../login&register/Login.php";
                
                
            } else {
               window.location.href = "../customer/cart.php";
            }
        });
     });