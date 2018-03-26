$(document).ready(function(){
    
    viewHoroscope();
    
    addHoroscope = function() {
        var personNR = $("#personNumber").val();
    
        if(personNR !== null){
        $.ajax({
        type: "POST",
        url: "./addHoroscope2.php",
        data: { personNR: personNR}
            })
        .done(function(data) {
            location.reload();
        });
        viewHoroscope();
    }
    else {
        alert("skriv pers");
    }
    
    }
    
    function viewHoroscope(){
    
        $.ajax({
            type: "GET",
            url: "./viewHoroScope2.php",
                })
            .done(function( data ) {
                $("#showMyHoroscope").html(data);
                
            });
    }

    
 
    
    
    
    });
    