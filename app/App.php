<?php
namespace liw\app;

use liw\traits\GoodByWorld;
use liw\traits\HelloWorld;

/**
 * Это финальный класс.
 * От него более нельзя наследоваться.
 * Class App
 * @package app
 */
final class App
{
    use HelloWorld, GoodByWorld {
        GoodByWorld::boot insteadof HelloWorld;
    }

    /**
     * App constructor.
     */
    public function __construct()
    {
        // Обращаемся к конструктору родительского класса
        echo 'Создался новый экземпляр класса из папки "app/"<br>';
        $this->helloWorld();
        echo '<br>';
        $this->by();
        echo '<br>';
        $this->boot();
    }
}
