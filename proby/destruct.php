<?php
class MyDestructableClass {
    function __construct() {

      echo  $this->name = "MyDestructableClass";

    }

    function __destruct() {
        $this->name;
    }
}

$obj = new MyDestructableClass();

$obj2 = new MyDestructableClass();

?>