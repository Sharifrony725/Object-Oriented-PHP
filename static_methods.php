<?php 
class Weather{
    public static $temConditions = ['cold','mild','warm'];
    public static $name = "Rony";
    public static function celciusToFarenheit($c){
        return $c * 9 / 5 + 32 ; 
    }   
    public static function determineTempCon($f){
        if($f <40 ){
            return self::$temConditions[0];
        }elseif ($f < 70) {
            return self::$temConditions[1];
        }else{
            return self::$temConditions[2];
        }
    }
}
print_r(Weather::$temConditions);
echo "<br>";
echo Weather::$temConditions[2];
echo "<br>";
echo Weather::$name;
echo "<br>";
echo Weather::celciusToFarenheit('12');
echo "<br>";
echo Weather::determineTempCon();
?>