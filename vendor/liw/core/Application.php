<?php
namespace liw\core;

/**
 * Это абстрактный класс.
 * Нельзя создать объект этого класса.
 * Можно лишь наследоваться от него.
 * Class Application
 */
abstract class Application
{
    public function __construct()
    {
        echo 'Создался новый экземпляр класса из папки "vendor/liw/core/"<br>';
    }

    /**
     * Это абстрактный метод.
     * Он не содержит реализации (нет тела метода в фигурных скобках)
     * @return string
     */
    abstract public function run();

    /**
     * Это финальный метод.
     * Его нельзя переопределить в дочернем классе.
     */
    final public function getFramework()
    {
        return 'LIW';
    }

}
