function addHoroscope(){
    $.ajax({
        url:"function/addHoroscope.php",
        method: "POST",
        data:{
            "socialNr": $("#socialNr").val()
        },
        success: function(results){
            $("#horoscope").html(results);
        }
    });
}

function updateHoroscope(){
    $.ajax({
        url:"function/updateHoroscope.php",
        method: "PUT",
        data:{
            "personNr": $("#socialNr").val()
        },
        success: function(results){
            $("#horoscope").html(results);
        }
    });
}

function viewHoroscope(){
    $.ajax({
        url:"function/viewHoroscope.php",
        method: "GET",
        data:{
            "personNr": $("#socialNr").val()
        },
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
            $("#horoscope").html(results);
        }
    });
}