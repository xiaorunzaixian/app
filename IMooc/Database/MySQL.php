<?php
/**
 * Created by PhpStorm.
 * User: run
 * Date: 15-1-5
 * Time: 下午4:21
 */

namespace IMooc\Database;

use IMooc\IDatabase;

class MySQL implements IDatabase
{
    protected $conn;

    function connect($host, $user, $passwd, $dbname)
    {
        $conn = mysql_connect($host, $user, $passwd);
        mysql_select_db($dbname, $conn);
        $this->conn = $conn;
    }

    function query($sql)
    {
        return mysql_query($sql, $this->conn);;
    }

    function close()
    {
        mysql_close($this->conn);
    }
}