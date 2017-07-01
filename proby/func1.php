<?php

$id = "dsf";

settype($id, 'integer');

echo  $id;

$id2 = array(5 => 'Привет');

print_r($id2);

echo '<hr>';

foreach ($id2 as $item){
    echo $item;
    echo '<hr>';
}

for ($a = 0;$a < 4;$a++){
    echo 'Цикл фор';
    echo '<hr>';
}

echo 'Тип данных '.gettype($id); //функция проверки типа данных (строка или массив и т.п.)