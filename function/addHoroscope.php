<?php
    session_start();
    include 'class.php';
?>   

<?php
    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $date = substr($_POST["socialNr"], -4, 4);
        if($_POST["socialNr"] == NULL){
            echo "Input field empty";
        }else{
            $person = new Person($date);
            if($_SESSION["horoscope"] == NULL){
                $_SESSION["horoscope"] = $person->horoscope;
                echo "Horoscope set";
            }else{
                ?> 
                <script type="text/javascript">alert("Horoscope " + "'<?php echo $_SESSION["horoscope"] ?>''" + " already set ")</script>
                <?php
            }
        }
        
    }






?>