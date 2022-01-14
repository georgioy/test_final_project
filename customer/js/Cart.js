// JavaScript Document

$(document).ready(function(){

  getCart();
	
	
			 
	
 getCatToDropDown();

 // Fill categories list in navbar 

	function parseCatToDropDown(data)
	{	
		
		
	$.each(data, function(index, row) 
	 { 
		var name=$(".dropdown-content").innerHTML="<a href='' class='dropdownCat' id='"+row.cat_id+"'> "+row.cat_name+"</a>";
	    $(".dropdown-content").append(name);	
	});
		
		
	}
	
		function getCatToDropDown()
	{		
		var	op = 2;
		  
		$.ajax({
			  type: 'GET',
			  url: "./ws/ws_cart.php",
			  data: ({op:op
					 }),
			  
			  dataType: 'json',
			  timeout: 5000,
			  success: function(data, textStatus, xhr) 
			  {				  
		  		 
				  if(data==-1)
					  alert("Data couldn't be loaded!");
				  else{
					 
				    
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
                    window.location.href = "./filtering.php";

                    return false;
               
        });

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
	
	////hide login icon if user is logged in and show logout
	$(document).ready(function () {
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
		
function parseCart(data)
	{		
		
		$("#carttbody").empty();	
		
		
		 $.each(data, function(index, row) {			   
			 			   
			  item="<tr id='tr_"+row.id+"'  data_id='"+row.id+"' >";
			  item+="<td data-th='image'><div class='row'><div class='col-md-3 text-left'><img src='../product_image/"+row.product_image+"' alt='' class='' style='width:100px; height:75px;'  ></div></td>";
			 item+="<td data-th='product name' > <div class='col-md-9 text-left mt-sm-2'><h4>"+row.product_name+"</h4><p class='font-weight-light'>"+row.product_gender+" &amp; Category:"+row.product_category+"</p></div></div>   </td>"
			  item+="<td data-th='Price' data-price'"+row.product_final_price+"' >"+row.product_final_price+"$</td>";
			  item+="<td  data-th='Quantity'><div class='input-group w-auto justify-content-end align-items-center'><input id='DEC' type='button' value='-' class='button-minus border rounded-circle  icon-shape icon-sm  ' data-field='quantity'><input type='number' id='qty' step='1' max='10' value='1' name='quantity' class='quantity-field border-0 text-center w-25 p-0'> <input type='button' id='INC' value='+' class='button-plus border rounded-circle icon-shape icon-sm  mx -1 ' data-field='quantity'></div></td>"
			 
			 
			 
			  item+="<td class='actions' data-th=''> <div class='text-right'><button type='button' class='btn' id='remove' >X </button></div></td>";
			  item+="</tr>";		
			   			 
		//	<i class="far fa-plus"></i>
			
			 
			 
			 $("#carttbody").append(item);			   			   
			   
			   
			});		
	}
	
	// adding content of cart
	function getCart()
	{		
		var	op = 8;
		  
		$.ajax({
			  type: 'GET',
			  url: "./ws/ws_cart.php",
			  data: ({op:op
					 }),
			  
			  dataType: 'json',
			  timeout: 5000,
			  success: function(data, textStatus, xhr) 
			  {				  
		  		 
				  if(data==-1)
					  alert("Data couldn't be loaded!");
				  else{
					 
				    data = JSON.parse(xhr.responseText);					
					
					  parseCart(data);
				      CalculateTotal();
					  parseCart(data);
		
					 change_num_items();
				  }
			  },
			
		  });  	

	}
	
	 
	// Calculate total price
	
	function CalculateTotal()
	{
		var total_price=0;
		var price=0;
		var prd_price = 0;
		var Quantity = 0;
	    var table = $("#carttbody");
        
        table.find('tr').each(function (i, el ){		
		var $tds = $(this).find('td'),
		prd_price = $tds.eq(2).text().replace('$', '');		

        Quantity = $tds.find("#qty").val();
	
		
		price+=prd_price*Quantity;
		
	  });
		total_price+=price; 
		total_price=total_price.toFixed(2);
		
		$("#total").text(total_price+" $");	
		
	
		
	}
    
	
	
	//  Increment Quantity
	   $(document).on('click', '#INC', function() 
	{
		  
	       QTY = $(this).parents('tr').find("input[name='quantity']").val();
		   QTY++;
		   

		   $(this).parent().find("#qty").val(QTY);
		//    alert(QTY);
		    	
	       $(document).on("change, keyup, focus", "#qty" ,CalculateTotal());
			                     
		   
		 });
	
	
	
	
	
	
	// Decrement quantity
	
	 $(document).on('click', '#DEC', function() 
	{
		  
	       QTY = $(this).parents('tr').find("input[name='quantity']").val();
		 var price =  $(this).parents('tr').find('td').eq(2).text();	
		   QTY--;
		   $(this).parent().find("#qty").val(QTY);
		   if(QTY<1)
			   {
				   $(this).parents("tr").remove();
				  
			   }
		      
		 $(document).on("change, keyup, focus" ,CalculateTotal(),change_num_items());
		 
		
		 
		
		 });
		

	 // Delete Item
	
	 $(document).on('click', '#remove', function(){ 
		 QTY = $(this).parents('tr').find("input[name='quantity']").val();	    
		var price =  $(this).parents('tr').find('td').eq(2).text();	
	//	alert(changeTotal(price,QTY));
	//	 changeTotal(price,QTY);
	       $(this).parents("tr").remove();
			
	           $(document).on("change, keyup, focus" ,"#qty",CalculateTotal(),change_num_items());
			   
			
		});
		
		
	
	// $(document).on("change, keyup, focus", "#qty" ,CalculateTotal(),change_num_items());
	
	function  change_num_items()
	{
		var rowCount = 0;
	
		rowCount = $("#shoppingCart tbody").children().length; 
        $("#num_items").text(+rowCount+"  items in your cart");
		
		
			
	}
	
	function PlaceOrder(product_id,product_quantity)
	
	{
		var	op = 3;
		  
		$.ajax({
			  type: 'GET',
			  url: "./ws/ws_cart.php",
			  data: ({op:op,
					  product_id:product_id ,
	                  product_quantity:product_quantity,  
					 }),
			  
			  dataType: 'json',
			  timeout: 5000,
			  success: function(data, textStatus, xhr) 
			  {				  
		  		 
				  if(data==-1)
					  alert("Data couldn't be loaded!");
				  else{
					 
				    data = JSON.parse(xhr.responseText);					
					
					
				  }
			  },
			
		  });  	
		
	}
	
	
	 $(document).on('click', '#Order', function(){ 
		 
		  $("#num_items").text("Your order is sent !");
		 
	    var table = $("#carttbody");
        
        table.find('tr').each(function (i, el ){		
		var $tds = $(this).find('td');	
			
      Quantity = $tds.find("#qty").val();
			var id=$(this).closest('tr').attr('data_id');
	
		
	PlaceOrder(id,Quantity);
			
		
	  });
		 
	    
		 table.empty();
	     $(document).on("change, keyup, focus" ,"#qty",CalculateTotal());
		 
		 
	 });
	
	
	
});