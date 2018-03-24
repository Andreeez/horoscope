$(document).ready(function(){
    // $("#showMyHoroscope").html("");

    // function viewHoroscope() {
    //     $.ajax({
    //       url: "php/viewHoroscope.php",
    //       method: "GET",
    //       data : {
    //         personNummer: $("#personNumber").val()
    //       },
    //       success: function(msg) {
    //           $("#showMyHoroscope").html(msg);
    //       },
    //   });
    // }

    // // viewHoroscope();
   
    // addHoroscope = function(){
    //     $.ajax({
    //         url:"php/addHoroscope.php",
    //         method: "POST",
    //         data:{
    //             personNummer: $("#personNumber").val()
    //         },
    //         success: function(msg){
    //            $("#showMyHoroscope").html(msg);
    //         }
    //     });
    //     viewHoroscope();
    // }









    addHoroscope = function(){
        var birthDate = $("#personNumber").val()
        $.ajax({
            url: "/php/addHoroscope.php",
            method: "POST",
            data: {
                personNumbers: birthDate
                
            },
           
            sucess:function(data){
                print_r(data);
                $("#showMyHoroscope").html(data);
            },
        });
        
        viewHoroscope();
        
    }

    function viewHoroscope(){
        var birthDate = $("#personNumber").val()

        $.ajax({
            url: "/php/viewHoroscope.php",
            method: "GET",
            data : {
                personNumbers: birthDate
            },
            sucess:function(data){
                addHoroscope();
            },
        });
    }
    viewHoroscope();
});