<?php

require_once '../config/debug.php';

$connect = new mysqli('localhost','root','','test');

$result = $connect->query("SELECT `title` FROM `news` WHERE `id` = 1");

$row = $result->fetch_assoc();

Debug::k_debug($row);

foreach ($row as $item) {
    echo $item;
}

