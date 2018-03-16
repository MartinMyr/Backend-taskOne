<?php
    session_start();
    parse_str(file_get_contents("php://input"), $_PUT);
    include 'class.php';  
?>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'PUT'){
        if(!isset($_SESSION["horoscopeSet"])){
            echo "No horoscope set, try saving first";

        }elseif($_PUT["socialNr"] == NULL){
            echo "Input field empty";

        }elseif($person->horoscope !== false){
            $_SESSION["horoscope"] = $person->horoscope;
            $_SESSION["horoscopeSet"] = 1 ;
            echo "Horoscope updated";
                   
        }else{
            echo "This is not a valid date! :/"; 
        }
    }

?>