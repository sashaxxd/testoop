<?php
/*if($_POST){
    echo "<pre>";
    print_r($_POST);
    echo "<pre>";
}
*/
function clentext($tt){
    $tt = htmlspecialchars($tt,ENT_QUOTES,"UTF-8",false);
    return $tt;
}

echo $str = clentext($_POST['text']);
//echo $_POST['text'];

?>


<form method="post">
    <input type="text" name="text">
    <input type="submit" name="submit" value="Отправить">
</form>

