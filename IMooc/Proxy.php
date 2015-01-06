<?php
/**
 * Created by PhpStorm.
 * User: run
 * Date: 15-1-5
 * Time: 下午10:43
 */

namespace IMooc;


class Proxy implements IUserProxy
{
    function getUsername($id)
    {
        $db = \IMooc\Factory::getDatabase('slave');
        $db->query("select name from user where id='{$id}' limit 1");
    }

    function setUsername($id, $name)
    {
        $db = \IMooc\Factory::getDatabase('master');
        $db->query("update user set name='{$name}i' where id ='{$id}' limit 1");
    }
} 