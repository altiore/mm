<?php

namespace liw\core;

/**
 * Это trait его можно подключить в любом классе.
 * количество подключенных трейтов не ограниченно.
 *
 * Class Validator
 * @package liw\core
 */
trait Validator
{
    public function validate($var)
    {
        echo 'Моя задача проверить валидность значения переменной: ' . $var . '<br>';
    }
}
