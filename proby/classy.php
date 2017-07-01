<?php
/**
 * Created by PhpStorm.
 * User: noutsasha
 * Date: 11.03.2017
 * Time: 23:52
 */

namespace app\proby;


class classy
{
    protected $vars = '30';
    protected $vars2 = '45';

    public function summ ($i){
        $res = $this->vars + $this->vars2 * $i;
        return $res;
    }

}



