<?php
    session_start();
    include 'class.php';
?>   

<?php
   
   
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
       
        if($_POST["socialNr"] == NULL){
            echo "Input field empty";
        }
        elseif(isset($_SESSION["horoscope"])){
            ?> 
            <script type="text/javascript">alert("Horoscope " + "'<?php echo $_SESSION["horoscope"] ?>''" + " already set ")</script>
            <?php
   
        }elseif($_SESSION["horoscope"] == NULL && $person->horoscope !== false){
            $_SESSION["horoscope"] = $person->horoscope;
            $_SESSION["horoscopeSet"] = true;
            echo "Horoscope set";
        }else{

            echo "This is not a valid date! :/";
            $_SESSION["horoscopeSet"] = false;   
            
        }
        
    }






?>