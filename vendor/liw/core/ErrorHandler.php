<?php

namespace liw\core;

class ErrorHandler
{
    /**
     * Храним здесь обрабатываемые ошибки,
     * и возвращаем, в зависимости от кода, название ошибки
     *
     * @param $error
     * @return string
     */
    static public function getErrorName($error){
        $errors = [
            E_ERROR => 'ERROR',
            E_WARNING => 'WARNING',
            E_PARSE => 'PARSE',
            E_NOTICE => 'NOTICE',
            E_CORE_ERROR => 'CORE_ERROR',
            E_CORE_WARNING => 'CORE_WARNING',
            E_COMPILE_ERROR => 'COMPILE_ERROR',
            E_COMPILE_WARNING => 'COMPILE_WARNING',
            E_USER_ERROR => 'USER_ERROR',
            E_USER_WARNING => 'USER_WARNING',
            E_USER_NOTICE => 'USER_NOTICE',
            E_STRICT => 'STRICT',
            E_RECOVERABLE_ERROR => 'RECOVERABLE_ERROR',
            E_DEPRECATED => 'DEPRECATED',
            E_USER_DEPRECATED => 'USER_DEPRECATED',
        ];
        if(array_key_exists($error, $errors)){
            return $errors[$error] . " [$error]";
        }

        return $error;
    }

    /**
     * Зарегистрируем этот метод в качестве собственных:
     * 1. обработчика ошибок (как обычных так и фатальных)
     * 2. ловца исключений, выброшенных вне блока try{} catch(){}
     */
    public function register()
    {
        // говорим php отслеживать все возможные ошибки
        ini_set('display_errors', 'on');
        error_reporting(E_ALL | E_STRICT);

        // регистрируем свой обработчик ошибок
        set_error_handler([$this, 'errorHandler']);

        // регистрируем свой обработчик выброшенных исключений
        set_exception_handler([$this, 'exceptionHandler']);

        // регистрируем свою функцию, выполняющуюся перед завершением скрипат
        // нужна для отлова фатальных ошибок. На практике используется редко.
        register_shutdown_function([$this, 'fatalErrorHandler']);
    }

    /**
     * Метод, который теперь вместо php будет обрабатывать ошибки.
     * Обратите внимание, что метод возвращает true,
     * если он вернет false или null, то обработка ошибок будет передана встроенному обработчику
     *
     * @param $errno
     * @param $errstr
     * @param $file
     * @param $line
     * @return bool
     */
    public function errorHandler($errno, $errstr, $file, $line)
    {
        // здесь можно произвести запись ошибки в лог, если есть необходимость

        // выводим информацию об ошибке в браузере
        $this->showError($errno, $errstr, $file, $line);

        // возвращаем true, чтоб управление обработкой ошибок НЕ было передано встроенному обработчику
        return true;
    }

    /**
     * Метод, который будет обрабатывать исключения,
     * вызванные вне блока try/catch
     *
     * @param \Exception $e
     */
    public function exceptionHandler(\Exception $e)
    {
        // выводим информацию об исключении в браузере
        $this->showError(get_class($e), $e->getMessage(), $e->getFile(), $e->getLine(), 404);
    }

    /**
     * Метод, который фиксирует наличие фатальной ошибки
     * и обрабатывает ее.
     */
    public function fatalErrorHandler()
    {
        // если в буфере находим фатальную ошибку,
        if ($error = error_get_last() AND $error['type'] & (E_ERROR | E_PARSE | E_COMPILE_ERROR | E_CORE_ERROR)) {
            ob_end_clean();// сбросить буфер, завершить работу буфера

            // то выводим ее в браузере
            $this->showError($error['type'], $error['message'], $error['file'], $error['line'], 500);
        }

        // в противном случае, ничего не делаем, оставляем работу скрипта на усмотрение встроенного обработчика.
    }

    /**
     * Вспомогательный метод,
     * который выводит информацию о случившемся в виде текста в браузере
     *
     * @param $errno
     * @param $errstr
     * @param $file
     * @param $line
     * @param int $status
     */
    public function showError($errno, $errstr, $file, $line, $status = 500)
    {
        header("HTTP/1.1 $status");
        echo $message = '<b>' . self::getErrorName($errno) . "</b><hr>" . $errstr . '<hr> file: ' . $file . '<hr> line: ' . $line . '<hr>';
        echo '<br>';
    }

}
