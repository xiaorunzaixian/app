<?php
/**
 * Created by PhpStorm.
 * User: run
 * Date: 15-1-5
 * Time: 下午2:52
 */

namespace IMooc;

class Loader
{
    static function autoload($class)
    {
        //var_dump($class);
        require BASEDIR.'/'.str_replace('\\', '/', $class).'.php';
    }
}