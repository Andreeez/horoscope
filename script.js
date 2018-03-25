$(document).ready(function(){
    // $("#showMyHoroscope").html("");

    function viewHoroscope() {
        $.ajax({
          url: "viewHoroscope.php",
          method: "GET",
          data : {
            personNummer: $("#personNumber").val()
          },
          success: function(msg) {
              $("#showMyHoroscope").html(msg);
          },
      });
    }

    // viewHoroscope();
   
    addHoroscope = function(){
        $.ajax({
            url:"addHoroscope.php",
            method: "POST",
            data:{
                personNummer: $("#personNumber").val()
            },
            success: function(msg){
               $("#showMyHoroscope").html(msg);
            }
        });
        viewHoroscope();
    }


});