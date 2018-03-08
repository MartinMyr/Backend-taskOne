<?php
    session_start();
echo "DFYG";
    if($_SERVER['REQUEST_METHOD'] == 'GET'){

        function showHoroscope(){
            if(isset($_SESSION["horoscope"])){
                echo $_SESSION["horoscope"];
                

            }
        }
        showHoroscope();
    }



?>