<?php

namespace liw\core;

use liw\contracts\Runnable;

/**
 * Это абстрактный класс.
 * Нельзя создать объект этого класса.
 * Можно лишь наследоваться от него.
 * Class Application
 */
abstract class Application implements Runnable
{
    /**
     * @var array
     */
    protected $config = [];

    /**
     * Метод выполнится в момент создания объекта
     */
    public function __construct()
    {
        echo 'Создался новый экземпляр класса из папки "vendor/liw/core/"<br>';
    }

    /**
     * @return array
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Это финальный метод.
     * Его нельзя переопределить в дочернем классе.
     */
    final public function getFramework()
    {
        return 'LIW';
    }

}
