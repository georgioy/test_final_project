$(document).ready(function(){

    
    var x = document.getElementsByClassName("userHiddenId");

     // alert($('.userHiddenId').attr('id'));
    var userid = $('.userHiddenId').attr('id');
   // alert(userid);

    senduserID();
    function senduserID(){
        var id =  userid;
        //  alert(id);
          var op=7;
          $.ajax({
              type: 'GET',
              url: "./ws/ws_customerHome.php",
              dataType: 'json',
              data: { op: op, userId: id },
              success: function (response) {
                  if (response == -1)
                      alert("Data couldn't be loaded!");
                  else {
                     // parseNew(response);
                  }
              },
              error: function (xhr, status, errorThrown) {
                  alert(status + errorThrown);
              }
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
            error: function (xhr, status, errorThrown) {
                alert(status + errorThrown);
            }
        });
    }
    
    function parseSales(response){
        var len = response.length;
        var container = document.querySelector(".mycontainer");


        for(var i=0; i<len; i++){
            var id = response[i].id;
            var product_name = response[i].product_name;
            var product_category = response[i].product_category;
            var product_price = response[i].product_price;
            var product_final_price = response[i].product_final_price;
            var product_image = response[i].product_image;
            var product_quantity = response[i].product_quantity;


            var Pimage = '<a href="#" class="image"  style="http://localhost/final1/f1/test_final_project/product_image/'    + product_image + '"' + '>';
            Pimage += '<img src="http://localhost/final1/f1/test_final_project/product_image/'    +  product_image + '"' ; 
            Pimage += '/>';
            Pimage += '</a>'

            
            var addToCart = '<a  id="'+id+'" href="" class="  addtoArray getsale add-to-cart" >';
            addToCart += 'Add To Cart';
            addToCart += '</a>';
          //  alert(addToCart);
            
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

 
        $(document).on('click', '.addtoArray', function(){
            var id =  $(this).attr("id");
         //  alert(id);
           // var op=4;
            var op=8;
            $.ajax({
                type: 'GET',
                url: "./ws/ws_customerHome.php",
                dataType: 'json',
                data: { op: op, PId: id },
                success: function (response) {
                    if (response == -1)
                        alert("Data couldn't be loaded!");
                    else {
                       // parseNew(response);
                    }
                },
                error: function (xhr, status, errorThrown) {
                  // alert(status + errorThrown);
                }
            });

            return false;

        });
    

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

          
            var Pimage = '<a href="#" class="image"  style="width:200px; height:200px; margin-left:50px;"' + '>';
            Pimage += '<img src="http://localhost/final1/f1/test_final_project/product_image/'    +  product_image + '"' ; 
            Pimage += '/>';
            Pimage += '</a>'

            
            var addToCart = '<a  id="'+id+'" href="" class="addarrival addtoArray add-to-cart" >';
            addToCart += 'Add To Cart';
            addToCart += '</a>';
          //  alert(addToCart);
            
            var productName = '<h3 class="title" > ';
            productName += '<a href="" >' + product_name + '</a>';
            productName += '</h3>';

            var Productprice =  '<div class="price" > ' + product_price + '$' + '</div>'; 
            var input4id = '<input type="hidden" id="'+id+'" >';

            
           $(document).on('click', '.add-to-cart', function(){
           // var id =  $(this).attr("id");
            // alert(input4id);
             return;            
          });
      
            container.innerHTML += '<div  class="col-md-3 col-sm-6" style="padding:20px;"><div class="product-grid">'+
            '<div class="product-image" >' + Pimage + addToCart + '</div>' + 
            '<div class="product-content" >' +  productName + Productprice + '</div> '
              +'</div></div>';

         } 


   
         
        // $(document).on('click', '.addarrival', function(){
        //     var id =  $(this).attr("id");
        //        //alert(id);
        //     //  var op=5;
        //     //  var op=8;
        //       $.ajax({
        //           type: 'GET',
        //           url: "./ws/ws_customerHome.php",
        //           dataType: 'json',
        //           data: { op: op, PID: id },
        //           success: function (response) {
        //               if (response == -1)
        //                   alert("Data couldn't be loaded!");
        //               else {

        //             }
        //           },
        //           error: function (xhr, status, errorThrown) {
        //               alert(status + errorThrown);
        //           }
        //       });
  
        //       return false;

        // });

   

    }

});



//    fill category cards


$(document).ready(function(){

    getNewArrivals();
    ////get all customers function
    function getNewArrivals(){
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
    
    function parseCategories(response){
        var len = response.length;
        var container = document.querySelector(".categoryCards");


        for(var i=0; i<len; i++){
            var id = response[i].cat_id;
            var cat_name = response[i].cat_name;
            var cat_status = response[i].cat_status;
            var cat_image = response[i].cat_image;
            
          
          var catimage = '<img class="img img-responsive" src="http://localhost/final1/f1/test_final_project/product_image/OIP.jpg"';
         // catimage += cat_image + '"';
          catimage += '>';

          
           // alert(divv);
           var catLink = '<a  href="" class="stretched-link getcat"   id="'+id+'" >';
           catLink += '<input type="hidden" class="getcat"    >'
           catLink += '</a>';
           

           var catnameDiv = '<div class="profile-name">';
            catnameDiv += cat_name;
            catnameDiv += '</div>';

        

            
            var divv = '<div class="profile-card-6">';
            divv += catimage;
            divv +=  catnameDiv;
            divv += catLink;
            divv += '</div>';


            if( i%2 == 1){
                container.innerHTML += '<div class=" col-md-4" style="padding-left:4%;">'+  
                divv  
                +'</div> ' + '<div class="col-xl-12 "></div>';  
            }else{
                 container.innerHTML += '<div class="col-md-4"  style="padding-left:4%;" >'+  
                 divv  
                 +'</div> ';  
            }
           
         } 
         $(document).on('click', '.getcat', function(){
            var id =  $(this).attr("id");
              // alert(id);
              var op=6;
              $.ajax({
                  type: 'GET',
                  url: "./ws/ws_customerHome.php",
                  dataType: 'json',
                  data: { op: op, catID: id },
                  success: function (response) {
                      if (response == -1)
                          alert("Data couldn't be loaded!");
                      else {
                         // parseNew(response);
                        }
                  },
                  error: function (xhr, status, errorThrown) {
                      alert(status + errorThrown);
                  }
              });
  
              return false;

        });


    }

});

   $(document).ready(function(){
    $(document).on('click', '.cartdiv', function(){
 
        
        var userid = $('.cartUid').attr('id');
        if(userid){
            alert(userid);
            //logged in -> redirect to user cart page
             // window.location = "https://www.google.com";

        }else{
            alert("not logged in");
            //not logged in -> go to login page
           // window.location = "https://www.google.com";
        }

     
       


    });

   });



