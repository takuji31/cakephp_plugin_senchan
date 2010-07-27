<?php
class StringRandom{
    public static function generate($length=10){
		$str = "";
		$strings="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        while(strlen($str) < $length){
            $str = $str . $strings[rand(0,strlen($strings)-1)];
        }
        return $str;
    }
}
?>
