<?php
/**
 * Created by PhpStorm.
 * User: run
 * Date: 15-1-5
 * Time: 下午3:05
 */

namespace IMooc;

interface IDatabase
{
    function connect($host, $user, $passwd, $dbname);
    function query($sql);
    function close();
}

class Database
{
    protected static $db;

//    private function __construct()
//    {
//
//    }

    static function getInstance()
    {
        if (!self::$db) {
            self::$db = new self();
        }
        return self::$db;
    }

    function where($where)
    {
        return $this;
    }

    function order($order)
    {
        return $this;
    }

    function limit($limit)
    {
        return $this;
    }
}