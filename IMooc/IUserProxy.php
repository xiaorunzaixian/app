<?php
/**
 * Created by PhpStorm.
 * User: run
 * Date: 15-1-5
 * Time: 下午10:44
 */

namespace IMooc;


interface IUserProxy
{
    function getUsername($id);
    function setUsername($id, $name);
}