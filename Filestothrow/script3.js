$(document).ready(function(){
    function viewHoroscope() {
        $.ajax({
          url: "inc/viewHoroscope3.php",
          method: "GET",
          data : {
            personNummer: $("#personNumber").val()
          },
          success: function(msg) {
              $("#showMyHoroscope").html(msg);
          },
      });
    }

    viewHoroscope();
   
    addHoroscope = function(){
        $.ajax({
            url:"inc/addHoroscope3.php",
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