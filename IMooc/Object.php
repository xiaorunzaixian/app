<?php
/**
 * Created by PhpStorm.
 * User: run
 * Date: 15-1-5
 * Time: 下午2:47
 */

namespace IMooc;

class Object
{
//    static function test()
//    {
//
//    }

    protected $array = array();

    function __set($key, $value)
    {
        var_dump(__METHOD__);
        $this->array[$key] = $value;
    }

    function __get($key)
    {
        var_dump(__METHOD__);
        return $this->array[$key];
    }

    function __call($func, $param)
    {
        var_dump($func, $param);
        return "magic function\n";
    }

    static function __callStatic($func, $param)
    {
        var_dump($func, $param);
        return "magic static function\n";
    }

    function __toString()
    {
        return __CLASS__;
    }

    function __invoke($param)
    {
        var_dump($param);
        return "invoke";
    }
}