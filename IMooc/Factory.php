<?php
/**
 * Created by PhpStorm.
 * User: run
 * Date: 15-1-5
 * Time: 下午3:49
 */

namespace IMooc;

class Factory
{
    static function creatDatabase()
    {
        //$db = new Database;
        $db = Database::getInstance();
        Register::set('db1', $db);
        return $db;
    }
}