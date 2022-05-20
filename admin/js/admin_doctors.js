

$(document).ready(function () {

 
    ActiveDoctors();
    InactiveDoctors();

    function ActiveDoctors() {
        $(".empty").hide();
        var op = 0;
        //request to get data

        $.ajax({
            type: 'GET',
            url: "./ws/ws_admin_doctors.php",
            data: { op: op,  },

            dataType: 'json',
            timeout: 5000,
            success: function (response, textStatus, xhr) {

                if (!response) {
                   
                    $(".empty").show();
                    $("#app_tbody").empty();
                }
                else {

                    data = JSON.parse(xhr.responseText);
                    parseActiveDoctors(response);
                  
                    $(".empty").hide();
                }
            },
            error: function (xhr, status, errorThrown) {

                alert(status + errorThrown);
            }
        });
    }
    //parse appointments today 
    function parseActiveDoctors(response) {
        $("#app_tbody").empty();
        var len = response.length;
        
        for (var i = 0; i < len; i++) {

            var doctor_id = response[i].doctor_id;
            var first_name = response[i].first_name;
            var last_name = response[i].last_name;
            var dr_type = response[i].dr_type;
            var Phone_number = response[i].Phone_number;
            var specialist = response[i].specialist;
            var proffessional_statments = response[i].proffessional_statments;
            var job_title = response[i].job_title;
            var about_yourself = response[i].about_yourself;
            var education = response[i].education;
            var work_experience = response[i].work_experience;
            var user_id = response[i].user_id;



            var row = '<div class="card"><table class="cardTable"><tbody><tr>';
            row += '<td class="td1"><div class="drProfilePic1"><img src="../images/P.jpg" class="drProfilePic"><div class="button"><a name="'+user_id+'" id="deactivateBtn" href="#"> Diactivate </a></div></div></td>';
            row += '<td><div class="drCardName2"><a href="#" data-replace="Go To Profile"><span>'+first_name.toUpperCase() +' '+ last_name.toUpperCase()+ '</span></a><br>'+dr_type+ ' </div>';
            row += '<div class="drCardSpecialty3">'+specialist.toUpperCase() +'</div></td></tr></tbody></table></div>';
            
            $("#app_tbody").append(row);
            
        }
        
        
    }
    

   // search in table
    $("#insearch").on("keyup", function () {
        var value = $(this).val().toLowerCase();

        $("#app_tbody div tbody tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
      
        });
        


    });

    
    //alert
	$("#app_tbody").on("click","#deactivateBtn", function(){// Deactivate btn inside the card
		if (confirm("Are you sure you want to deactivate the user?"))
		var id=$(this).attr("name");
		 deactivateUser(id);
			
	});

    function deactivateUser(userID) 
	{  
	$.ajax({
		type:'GET',
		url: "./ws/ws_admin_doctors.php",
		data:({op:2,id:userID}),
  
		dataType:'json',
		timeout:5000,
		success: function(data, textStatus, xhr)
		{
		  if(data==-1){
			alert("Data Couldn't be Loaded");
		  }
		  else if (data==1){
			InactiveDoctors();
            ActiveDoctors();
		  }
		},
		error:function(xhr,status,errorThrown)
		{
		}
  
	});
	}





  

    function InactiveDoctors() {
        $(".empty1").hide();
        var op = 3;
        //request to get data

        $.ajax({
            type: 'GET',
            url: "./ws/ws_admin_doctors.php",
            data: { op: op,  },

            dataType: 'json',
            timeout: 5000,
            success: function (response, textStatus, xhr) {

                if (!response) {
                   
                    $(".empty1").show();
                    $("#app_tbody_inactive").empty();
                }
                else {

                    data = JSON.parse(xhr.responseText);
                    parseInactiveDoctors(response);
                  
                    $(".empty1").hide();
                }
            },
            error: function (xhr, status, errorThrown) {

                alert(status + errorThrown);
            }
        });
    }
    //parse appointments today 
    function parseInactiveDoctors(response) {
        $("#app_tbody_inactive").empty();
        var len = response.length;
        
        for (var i = 0; i < len; i++) {

            var doctor_id = response[i].doctor_id;
            var first_name = response[i].first_name;
            var last_name = response[i].last_name;
            var dr_type = response[i].dr_type;
            var Phone_number = response[i].Phone_number;
            var specialist = response[i].specialist;
            var proffessional_statments = response[i].proffessional_statments;
            var job_title = response[i].job_title;
            var about_yourself = response[i].about_yourself;
            var education = response[i].education;
            var work_experience = response[i].work_experience;
            var user_id = response[i].user_id;



            var row = '<div class="card"><table class="cardTable"><tbody><tr>';
            row += '<td class="td1"><div class="drProfilePic1"><img src="../images/P.jpg" class="drProfilePic"><div class="diactivatedDiv">Deactivated</div><div class="button"><a name="'+user_id+'" id="reactivateBtn" href="#"> Reactivate </a></div></div></td>';
            row += '<td><div class="drCardName2"><a href="#" data-replace="Go To Profile"><span>'+first_name.toUpperCase() +' '+ last_name.toUpperCase()+ '</span></a><br>'+dr_type+ ' </div>';
            row += '<div class="drCardSpecialty3">'+specialist.toUpperCase() +'</div></td></tr></tbody></table></div>';
            
            $("#app_tbody_inactive").append(row);
            
        }
        
        
    }
     //alert
	$("#app_tbody_inactive").on("click","#reactivateBtn", function(){// Reactivate btn inside the card
		if (confirm("Are you sure you want to Reactivate the user?"))
		var id=$(this).attr("name");
		 reactivateUser(id);
			
	});

    function reactivateUser(userID) 
	{  
	$.ajax({
		type:'GET',
		url: "./ws/ws_admin_doctors.php",
		data:({op:4,id:userID}),
  
		dataType:'json',
		timeout:5000,
		success: function(data, textStatus, xhr)
		{
		  if(data==-1){
			alert("Data Couldn't be Loaded");
		  }
		  else if (data==1){
            InactiveDoctors();
            ActiveDoctors();
		  }
		},
		error:function(xhr,status,errorThrown)
		{
		}
  
	});
	}


   // search in table
    $("#insearch").on("keyup", function () {
        var value = $(this).val().toLowerCase();

        $("#app_tbody div tbody tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
      
        });
        


    });


});

