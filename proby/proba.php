<?php
require_once '../config/db.php';

$chell = new db();

$result = $chell->sql("SELECT * 
    FROM `artikl` ");

$row = $result->fetch_array();

do{
    echo $row['title'] . '<br>';

}
while ($row = $result->fetch_array());



?>
