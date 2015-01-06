<?php
/**
 * Created by PhpStorm.
 * User: run
 * Date: 15-1-5
 * Time: 下午4:48
 */

namespace IMooc;


class FemaleUserStrategy implements UserStrategy{
    function showAd()
    {
        echo "2015新款女装";
    }

    function showCategory()
    {
        echo "女装";
    }
} 