$(document).ready(function(){
    $("#showMyHoroscope").html("");

//Function to show horoscope. Button functions for show/hide. Making user interface more attractive for the user.
    function viewHoroscope(){
        $.ajax({
          url: "./php/viewHoroscope.php",
          method: "GET",
          data : {
            personNumber: $("#personNumber").val()
          },
          
          success: function(horoScopeInformation){
            $("#showMyHoroscope").html(horoScopeInformation);
            if(horoScopeInformation.length !== 0){
                $("#addHoroscope").hide();
                $("#updateHoroscope").show();
                $("#deleteHoroscope").show();
            } else {
                $("#addHoroscope").show();
                $("#updateHoroscope").hide();
                $("#deleteHoroscope").hide();
            }
           

          },
        
      });
    }
    
    viewHoroscope();
//Function for adding the horoscope to viewHoroscope
    addHoroscope = function(){
        $.ajax({
            url:"./php/addHoroscope.php",
            method: "POST",
            data:{
                personNumber: $("#personNumber").val()
            },
            success: function(horoScopeInformation){

                viewHoroscope();

            },
        });
    }
    
//Function for updating the horoscope
    updateHoroscope = function(){
        $.ajax({
            url:"./php/updateHoroscope.php",
            method: "PUT",
            data:{
                personNumber: $("#personNumber").val()
            },
            success: function(horoScopeInformation){

                viewHoroscope();

             },
        });
    }
//Function for deleting the horoscope.
    deleteHoroscope = function(){
        $.ajax({
            url:"./php/deleteHoroscope.php",
            method: "DELETE",

            success: function(horoScopeInformation){

                viewHoroscope();

             },
        });
    }


});