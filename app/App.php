<?php
namespace app;

require __DIR__  . '/../vendor/liw/core/Application.php';

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
     * Попытка переопределить финальный метод вызовет ошибку.
     * раскомментируйте строку ниже, чтобы убедиться.
     */
    //public function getFramework(){}
}
