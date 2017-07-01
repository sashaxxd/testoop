<?php
require_once '../config/db.php';


class Mcontent extends db{

    public  function return_content($id){
        $sql = "SELECT `text`,title FROM `content` WHERE `id` = $id LIMIT 1";
        if(!$id){
            $sql = "SELECT `text` FROM `content` ORDER BY `text` DESC LIMIT 1";
        }
        $res = $this->sql($sql);



        return $res;

    }

}
class Ccontent extends Mcontent{
    public  function print_content($id){


        settype($id, 'integer');

        $result = $this->return_content($id);
        $row = $result->fetch_assoc();




        $page = array();

        foreach ($row as $item => $value){
            $page[$item] = $value;
        }

        return $page;
    }

}

$id = 4;


$wcontent = new Ccontent();

$content1 = $wcontent->print_content($id);

Debug::k_debug($content1);

echo $content1['text'];

echo $content1['title'];