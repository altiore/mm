<?php
namespace app;

use liw\core\Application;

/**
 * Это финальный класс.
 * От него более нельзя наследоваться.
 * Class App
 * @package app
 */
final class App extends Application
{
    public function __construct()
    {
        // Обращаемся к конструктору родительского класса
        parent::__construct();
        echo 'Создался новый экземпляр класса из папки "app/"<br>';
    }

    /**
     * @return string
     */
    public function run()
    {
        return 'Возвращаем строку, как предписано в родительском классе.';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return 'version = 0.0.1';
    }
}
