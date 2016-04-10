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
     * App constructor.
     */
    public function __construct()
    {
        // Обращаемся к конструктору родительского класса
        echo 'Создался новый экземпляр класса из папки "app/"<br>';
        $this->boot();
    }
}
