<?php
/**
 * Created by PhpStorm.
 * User: run
 * Date: 15-1-5
 * Time: 下午5:25
 */

namespace IMooc;


class User {
    public $id;
    public $name;
    public $mobile;
    public $regtime;

    protected $db;

    function __construct($id)
    {
        $this->db = new \IMooc\Database\MySQLi();
        $this->db->connect('127.0.0.1', 'root', '' ,'test');
        $res = $this->db->query("select * from user where id='{$id}' limit 1");
        $data = $res->fetch_assoc();
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->mobile = $data['mobile'];
        $this->regtime = $data['regtime'];
    }

    function __destruct()
    {
        $this->db->query("update user set name='{$this->name}',mobile='{$this->mobile}',regtime='{$this->regtime}' where id='{$this->id}' limit 1");
    }
} 