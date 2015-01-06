<?php
/**
 * Created by PhpStorm.
 * User: run
 * Date: 15-1-5
 * Time: 下午4:03
 */

namespace IMooc;

class Register
{
    protected $object;

    static function set($alias, $object)
    {
        self::$object[$alias] = $object;
    }

    static function get($name)
    {
        return self::$object[$name];
    }

    function _unset()
    {
        unset(self::$object[$alias]);
    }
}