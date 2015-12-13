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
    /**
     * @var array - массив разрешенный путей в приложении
     */
    private $path_array = [
        '/',
        '/articles',
        '/contacts'
    ];

    public function __construct()
    {
        // Обращаемся к конструктору родительского класса
        parent::__construct();
        echo 'Создался новый экземпляр класса из папки "app/"<br><br><br>';
    }

    /**
     * Осуществит разные действия в зависимости от переданого аргумента:
     * 1. если путь найден, то выведет соответствующую страницу
     * 2. если путь не найден или не передан, то выведет страницу со статусом 404 (страница не найдена)
     *  и запишет для разработчика инфрмацию в файл (логирует), что произошло обращение к несуществующей странице
     * @param $path
     * @return mixed
     */
    public function run($path = null)
    {
        if(in_array($path, $this->path_array)){
            echo "Путь '$path' сущестует. Выводим страницу со статусом 200";
            echo '<br>';
        } else {
            echo "Путь '$path' не существует. Выводим страницу со статусом 404. Логируем (записываем в файл)
                информацию о том, что произошло обращение к несуществующей странице";
            echo '<br>';
        }
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return 'Liw version is 0.0.1';
    }
}
