$(document).ready(function(){
    $("#showMyHoroscope").html("");

    function viewHoroscope() {
        $.ajax({
          url: "./php/viewHoroscope.php",
          method: "GET",
          data : {
            personNumber: $("#personNumber").val()
          },
          success: function(msg) {
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


});