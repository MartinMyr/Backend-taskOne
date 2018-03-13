<?php

    class Person{
        public $horoscope;
        function __construct($date){
            $this->date = $date;
            if($date <4){
                echo "Please enter a valid number";
            }elseif($date >= '0321' && $date <= '0420'){  
                $this->horoscope = "Väduren";
            }elseif($date >= '0421' && $date <= '0521'){
                $this->horoscope = "Oxe";
            }elseif($date >= '0522' && $date <= '0621'){
                $this->horoscope = "Tvilling";
            }elseif($date >= '0622' && $date <= '0722'){
                $this->horoscope = "Kräfta";
            }elseif($date >= '0723' && $date <= '0823'){
                $this->horoscope = "Lejon";
            }elseif($date >= '0824' && $date <= '0922'){
                $this->horoscope = "Jungfru";
            }elseif($date >= '0923' && $date <= '1023'){
                $this->horoscope = "Våg";
            }elseif($date >= '1024' && $date <= '1122'){
                $this->horoscope = "Skorpion";
            }elseif($date >= '1123' && $date <= '1221'){
                $this->horoscope = "Skytt";
            }elseif($date >= '1222' && $date <= '0120'){
                $this->horoscope = "Stenbock";
            }elseif($date >= '0121' && $date <= '0218'){
                $this->horoscope = "Vattuman";
            }elseif($date >= '0219' && $date <= '0320'){
                $this->horoscope = "Fisk";
            }
            
        }
        
        public function printSign($date){
            return $this->horoscope;
        }

    }

?>
    
    
