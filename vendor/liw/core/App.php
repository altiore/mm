<?php
namespace liw\core;

/**
 * Class App
 */
abstract class App
{
    public function __construct()
    {
        echo 'Создался новый экземпляр класса из папки "vendor/liw/core/"<br>';
    }

    /**
     * @param $path
     * @return mixed
     */
    abstract public function run($path = null);
}
