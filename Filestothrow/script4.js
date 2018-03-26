$(document).ready(function(){
    // $("#showMyHoroscope").html("");

    function viewHoroscope() {
        $.ajax({
          url: "viewHoroscope4.php",
          method: "GET",
          data : {
            personNumber: $("#personNumber").val()
          },
          success: function(msg) {
              $("#showMyHoroscope").html(msg);
          },
      });
    }

    // viewHoroscope();
   
    addHoroscope = function(){
        $.ajax({
            url:"addHoroscope4.php",
            method: "POST",
            data:{
                personNumber: $("#personNumber").val()
            },
            success: function(msg){
               $("#showMyHoroscope").html(msg);
            }
        });
        viewHoroscope();
    }


});