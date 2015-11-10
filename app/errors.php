<?php
echo "Файл с ошибками. Начало<br><br>";
/*
 * перехватываемые ошибки (ловятся функцией set_error_handler())
 */
// NONFATAL - E_NOTICE
// echo $undefined_var;
// NONFATAL - E_WARNING
// array_key_exists('key', NULL);
// NONFATAL - E_DEPRECATED
// split('[/.-]', "12/21/2012"); // split() deprecated начиная с php 5.3.0
// NONFATAL - E_STRICT
// class c {function f(){}} c::f();
// NONFATAL - E_USER_DEPRECATED
// trigger_error("E_USER_DEPRECATED", E_USER_DEPRECATED);
// NONFATAL - E_USER_WARNING
// trigger_error("E_USER_WARNING", E_USER_WARNING);
// NONFATAL - E_USER_NOTICE
// trigger_error("E_USER_NOTICE", E_USER_NOTICE);

// FATAL, если не обработана функцией set_error_handler - E_RECOVERABLE_ERROR
// class b {function f(int $a){}} $b = new b; $b->f(NULL);
// FATAL, если не обработана функцией set_error_handler - E_USER_ERROR
// trigger_error("E_USER_ERROR", E_USER_ERROR);

/*
 * неперехватываемые (не ловятся функцией set_error_handler())
 */
// FATAL - E_ERROR
// undefined_function();
// FATAL - E_PARSE
// parse_error
// FATAL - E_COMPILE_ERROR
// $var[];

/*
 * Вызванное исключение вне блока try{} catch(){}
 */
// throw new \InvalidArgumentException("Текст сгенерированного исключения");
// throw new \Exception("Текст сгенерированного исключения");


echo "<br>Файл с ошибками. Конец<br>";
