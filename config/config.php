<?php
require_once 'debug.php';



class Config extends Debug{

    function __construct(){
        $this->APP_PATH = dirname(dirname(__FILE__));
    }

    var $APP_PATH;

    var $DB_HOST = 'localhost';
    var $DB_USER = 'root';
    var $DB_PASSWORD = '';
    var $BD_BASE = 'test';

}

$config = new Config();



