<?php
namespace app;

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

    /**
     * Всеядный метод, который может корректно отрабатывать с данными разных типов
     * @param null|Data1|Data2 $data
     */
    public function run($data = null)
    {
        echo $data->get();
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return 'version = 0.0.1';
    }
}
