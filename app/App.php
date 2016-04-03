<?php
namespace liw\app;

/**
 * Это финальный класс.
 * От него более нельзя наследоваться.
 * Class App
 * @package app
 */
final class App
{
    /**
     * Конфигурация приложения
     * @var array
     */
    private $config = [];

    /**
     * App constructor.
     */
    public function __construct()
    {
        // Обращаемся к конструктору родительского класса
        echo 'Создался новый экземпляр класса из папки "app/"<br>';
    }

    /**
     * Метод run реализует интерфейс Runnable
     * обязаны принять аргумент $config, как предписано в интерфейсе
     * @param $config
     * @return void
     */
    public function run($config)
    {
        $this->config = $config;
    }
}
