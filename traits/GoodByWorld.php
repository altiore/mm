<?php
/**
 * Created by PhpStorm.
 * User: r
 * Date: 10.04.16
 * Time: 19:53
 */

namespace liw\traits;


trait GoodByWorld
{
    public function by()
    {
        echo 'До новых встреч!';
    }

    public function boot()
    {
        echo 'Я в трейте GoodByWorld';
    }
}
