<?php
require_once '../config/config.php';
?>

<a href = "?page=create">Создать страницу</a> - <a href = "?page=list">Список страниц</a> <hr />
<?php

if($_GET['page'] == "create"){
    require_once "{$config->APP_PATH}/views/vcreate.php" ;
}

?>