<?php
require_once 'models/mcontent.php';

class Ccontent extends Mcontent{
       public  function print_content($id)
       {


           settype($id, 'integer');

           $result = $this->return_content($id);
           $row = $result->fetch_assoc();


           $page = array();
           if ($row) {

           foreach ($row as $item => $value) {
               $page[$item] = $value;
           }
       }

           return $page;

           //$val = $row['text'];

           //return $val;
       }

}

$id = $_GET['id'];


$wcontent = new Ccontent();

$content1 = $wcontent->print_content($id);

