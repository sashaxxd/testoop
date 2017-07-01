<?php
require_once "{$config->APP_PATH}/config/db.php" ;
class McreateEdit extends db{
    function create($post) {
        $sql = "insert into
				pages(description,keywords,title,menu_name,position,visible,content,created)
				VALUES('{$post['description']}','{$post['keywords']}','{$post['title']}',
				'{$post['menu_name']}',{$post['position']},'{$post['visible']}','{$post['content']}',NOW())" ;
//			echo $sql ;
        $this->sql($sql) ;

        return true ;
    }
}