<?php

require_once '/config/db.php';

class Mmenu extends db{

    public  function return_menu(){
        $sql = "SELECT `id` , `name_menu` FROM `menu` WHERE `visible` = '1'";
        $res = $this->sql($sql);
        return $res;
    }

}