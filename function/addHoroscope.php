<?php
    session_start();
    include 'class.php';
?>   

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //print_r($_POST);
        $date = substr($_POST["socialNr"], -4, 4);

        $person = new Person($date);
        if($_SESSION["horoscope"] == NULL){
            $_SESSION["horoscope"] = $person->horoscope;
        }else{
?> 
        <script type="text/javascript">alert("Horoscope " + "'<?php echo $_SESSION["horoscope"] ?>''" + " already set ")</script>
<?php
        }
    }






?>