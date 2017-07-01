<?php

require_once '/models/mmenu.php';

class Cmenu extends Mmenu{
     function menu_print(){
         $result = $this->return_menu();
         while ($row = $result->fetch_array()){
             
             $menuname[$row['id']] =  $row['name_menu'];
             }
         return $menuname;
     }
}

$menu = new Cmenu();

$aux = $menu->menu_print();


foreach ($aux as $url => $link) {
echo "<li><a href = \"?id={$url}\">{$link}</a></li>";
                                }
?>



