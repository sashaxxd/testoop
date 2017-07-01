<?php

require_once 'config/db.php';


class Mcontent extends db{

    public  function return_content($id){
        if($id){
            settype($id, 'integer');
        }

           $sql = "SELECT `text`,`title`,description,keywords FROM `content` WHERE `id` = $id and`visible` = '1' LIMIT 1 ";
        if(!$id){
            $sql = "SELECT `text`,`title`,description,keywords FROM `content` ORDER BY `text` ASC LIMIT 1";
        }
        $res = $this->sql($sql);



        return $res;

    }

}

