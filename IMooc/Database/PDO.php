<?php
/**
 * Created by PhpStorm.
 * User: run
 * Date: 15-1-5
 * Time: 下午4:21
 */

namespace IMooc\Database;

use IMooc\IDatabase;

class PDO implements IDatabase
{
    protected $conn;

    function connect($host, $user, $passwd, $dbname)
    {
       $conn = new \PDO('mysql:host=$host;dbname=$dbname', $user, $passwd);
        $this->conn = $conn;
    }

    function query($sql)
    {
        return $this->conn->query($sql);
    }

    function close()
    {
        unset($this->conn);
    }
}