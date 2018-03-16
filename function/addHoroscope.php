<?php
    session_start();
    include 'class.php';
?>   

<?php
    $date = substr($_POST["socialNr"], -4, 4);
   
   
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
       
        if($_POST["socialNr"] == NULL){
            echo "Input field empty";
        }
        elseif(isset($_SESSION["horoscopeSet"])){
            ?> 
            <script type="text/javascript">alert("Horoscope " + "'<?php echo $_SESSION["horoscope"] ?>''" + " already set ")</script>
            <?php
   
        }else{
            $person = new Person($date);
            if($_SESSION["horoscope"] == NULL){
                $_SESSION["horoscope"] = $person->horoscope;
                $_SESSION["horoscopeSet"] = 1 ;
                echo "Horoscope set";
            }else{
               
            }
        }
        
    }






?>