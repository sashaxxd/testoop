<?php

require_once 'config.php';

class db extends Config{

    public  function __construct(){
        $this->open_connect();
        //echo 'Соединено с базой данных';
    }

    private  $connect;
    private  $result;


    private function open_connect(){
         $this->connect = new mysqli
         ($this->DB_HOST,$this->DB_USER,$this->DB_PASSWORD,$this->BD_BASE);
         $this->connect->query("SET NAMES 'utf8'");
        if(!$this->connect){
            exit("Чето то не то с базой" . $this->connect->error);
        }
        

    }

    public function sql($sqli){
        $this->result = $this->connect->query($sqli);
        if(!$this->result){
            exit("Ошибка заявки к базе" . $this->connect->error);
        }
        return $this->result;
    }

}



/*
$object  = new db();

$result = $object->sql("SELECT * 
    FROM `artikl`");

$row = $result->fetch_array();

do{
    echo $row['title'] . '<br>';

}
while ($row = $result->fetch_array());


$object2  = new db();//Второй объект


$result = $object2->sql("SELECT id FROM `artikl` WHERE `title` = 'Товар 3'");

$row = $result->fetch_array();

do{
    echo $row['title'] . '<br>';

}
while ($row = $result->fetch_array());
*/



?>







