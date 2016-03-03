<?php
namespace app;

require __DIR__  . '/../vendor/liw/core/App.php';

use liw\core\App as Application;

/**
 * Class App
 * @package app
 */
class App extends Application
{
    public function __construct()
    {
        // Обращаемся к конструктору родительского класса
        parent::__construct();
        echo 'Создался новый экземпляр класса из папки "app/"<br>';
    }
}
