function addHoroscope(){
    $.ajax({
        url:"function/addHoroscope.php",
        method: "POST",
        data:{
            "socialNr": $("#socialNr").val()
        },
        success: function(results){
            viewHoroscope();
            $("#action").html(results);
            
        }
    });
}

function updateHoroscope(){
    $.ajax({
        url:"function/updateHoroscope.php",
        method: "PUT",
        data:{
            "socialNr": $("#socialNr").val(),
            
        },
        success: function(results){
                viewHoroscope();
            
            $("#action").html(results);
        }
    });
}

function viewHoroscope(){
    $.ajax({
        url:"function/viewHoroscope.php",
        method: "GET",
        success: function(results){
            $("#horoscope").html(results);
        }
    });
}

function deleteHoroscope(){
    $.ajax({
        url:"function/deleteHoroscope.php",
        method: "DELETE",
        data:{
            "personNr": $("#socialNr").val()
        },
        success: function(results){
            viewHoroscope();
            $("#action").html(results);
            $("#save").show();
        }
    });
}