<?php
     if($_SERVER['REQUEST_METHOD'] == 'PUT'){
        $date = substr($_PUT["socialNr"], -4,4);
     }else{
        $date = substr($_POST["socialNr"], -4, 4);
     }
         
    
    
    
    class Person{
        public $horoscope;
        public $horPic;
        function __construct($date){
            $this->date = $date;
            if(strlen($date) < 4){
               $this->horoscope = false; 
            }elseif($date >= '0321' && $date <= '0331' || $date >= '0401' && $date <= '0420'){  
                $this->horoscope = "Väduren";
                $this->horPic = "../pic/vadur.jpg";
            }elseif($date >= '0421' && $date <= '0430' || $date >= '0501' && $date <= '0521'){
                $this->horoscope = "Oxe";
            }elseif($date >= '0522' && $date <= '0531' || $date >= '0601' && $date <= '0621'){
                $this->horoscope = "Tvilling";
            }elseif($date >= '0622' && $date <= '0630' || $date >= '0701' && $date <= '0722'){
                $this->horoscope = "Kräfta";
            }elseif($date >= '0723' && $date <= '0731' || $date >= '0801' && $date <= '0823'){
                $this->horoscope = "Lejon";
            }elseif($date >= '0824' && $date <= '0831' || $date >= '0901' && $date <= '0922'){
                $this->horoscope = "Jungfru";
            }elseif($date >= '0923' && $date <= '0930' || $date >= '1001' && $date <= '1023'){
                $this->horoscope = "Våg";
            }elseif($date >= '1024' && $date <= '1031' || $date >= '1101' && $date <= '1122'){
                $this->horoscope = "Skorpion";
            }elseif($date >= '1123' && $date <= '1130' || $date >= '1201' && $date <= '1221'){
                $this->horoscope = "Skytt";
            }elseif($date >= '1222' && $date <= '1231' || $date >= '0101' && $date <= '0120' ){
                $this->horoscope = "Stenbock";
            }elseif($date >= '0121' && $date <= '0131' || $date >= '0201' && $date <= '0218'){
                $this->horoscope = "Vattuman";
            }elseif($date >= '0219' && $date <= '0228' || $date >= '0301' && $date <= '0320'){
                $this->horoscope = "Fisk";
            }else{
                $this->horoscope = false; 
            }
            
        }
        
        
        
        public function printSign($date){
            return $this->horoscope;
        }
        public function printPic(){
            return $this->horPic;
        }
    }
    $person = new Person($date);
?>
    
    
