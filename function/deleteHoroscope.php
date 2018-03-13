<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
        if(isset($_SESSION["horoscope"])){
            unset($_SESSION["horoscope"]);
            unset($_SESSION["horoscopeSet"]);
            echo "Horoscope deleted";
        }else{
            echo "No horoscope to delete";
        }
    }


?>