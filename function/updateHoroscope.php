<?php
    session_start();
    parse_str(file_get_contents("php://input"), $_PUT);
    include 'class.php';
?>

<?php

    if($_SERVER['REQUEST_METHOD'] == 'PUT'){
        if(!isset($_SESSION["horoscopeSet"])){
            echo "No horoscope set, try saving first";
        }else{
                $date = substr($_PUT["socialNr"], -4, 4);
                if($_PUT["socialNr"] == NULL){
                    echo "Input field empty";
                }else{
                    $person = new Person($date);
                    $_SESSION["horoscope"] = $person->horoscope;
                    $_SESSION["horoscopeSet"] = 1 ;
                    echo "Horoscope updated";
                }    
            }
    }




?>