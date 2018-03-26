$(document).ready(function(){
    $("#showMyHoroscope").html("");

    function viewHoroscope(){
        $.ajax({
          url: "./php/viewHoroscope.php",
          method: "GET",
          data : {
            personNumber: $("#personNumber").val()
          },
          
          success: function(msg){
            $("#showMyHoroscope").html(msg);
        
          },
        
      });
    }
    

     
    


    viewHoroscope();
   
    addHoroscope = function(){
        $.ajax({
            url:"./php/addHoroscope.php",
            method: "POST",
            data:{
                personNumber: $("#personNumber").val()
            },
            success: function(msg){
               $("#showMyHoroscope").html(msg);
            },
        });
        viewHoroscope();
    }

    updateHoroscope = function(){
        $.ajax({
            url:"./php/updateHoroscope.php",
            method: "PUT",
            data:{
                personNumber: $("#personNumber").val()
            },
            success: function(msg){
                $("#showMyHoroscope").html(msg);
             },
        });
        viewHoroscope();
    }

    deleteHoroscope = function(){
        $.ajax({
            url:"./php/deleteHoroscope.php",
            method: "DELETE",

            success: function(msg){
                $("#showMyHoroscope").html(msg);
             },
        });
        viewHoroscope();
    }


});