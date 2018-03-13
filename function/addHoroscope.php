<?php
    session_start();
    include 'class.php';
?>   

<?php
    session_start();
    if(isset($_SESSION["horoscopeSet"])){
        ?> 
        <script type="text/javascript">alert("Horoscope " + "'<?php echo $_SESSION["horoscope"] ?>''" + " already set ")</script>
        <?php
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $date = substr($_POST["socialNr"], -4, 4);
        if($_POST["socialNr"] == NULL){
            echo "Input field empty";
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