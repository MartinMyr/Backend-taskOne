<?php
    session_start();
    parse_str(file_get_contents("php://input"), $_PUT);
    include 'class.php';  
?>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'PUT'){
        if($_PUT["socialNr"] == NULL){
            echo "Input field empty";

        }elseif(!isset($_SESSION["horoscope"])){
            $check = false;
            echo $check;

        }elseif($person->horoscope !== false){
            $_SESSION["horoscope"] = $person->horoscope;
            $check = true;
            echo $check;
                   
        }else{
            echo "This is not a valid date! :/"; 
        }
    }

?>