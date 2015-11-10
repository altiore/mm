<?php

namespace app;

use liw\core\Application;
use liw\core\Validator;

/**
 * Это финальный класс.
 * От него более нельзя наследоваться.
 * Class App
 * @package app
 */
final class App extends Application
{
    use Validator;

    public function __construct()
    {
        // Обращаемся к конструктору родительского класса
        parent::__construct();
        echo 'Создался новый экземпляр класса из папки "app/"<br>';
    }

    /**
     * Метод run реализует интерфейс Runnable
     * обязаны принять аргумент $config, как предписано в интерфейсе
     *
     * @param $config
     * @return void
     */
    public function run($config)
    {
        $this->config = $config;
    }

}
