<?php
require_once 'classy2.php';

use app\proby\classy2\classy2 as Vtor;

class classy3 extends Vtor
{
       public  function wern(){
          return static::$hui = 'Херь';
       }
}

$obj = new classy3();
echo '<br>';
echo $obj->wern();
