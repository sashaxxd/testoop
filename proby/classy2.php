<?php
namespace app\proby\classy2;
include 'classy.php';



use app\proby\classy as Pervyi;

class classy2 extends Pervyi{

    public  static $hui = 'Длинный';
    public static function reter(){
       $res =  self::$hui;
        echo $res;
    }

}

$obj = new classy2();

echo $obj->summ(77);

echo '<br>';

classy2::reter();
