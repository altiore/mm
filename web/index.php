<?php
/**
 * Это единая точка входа для нашего приложения.
 * На этот файл будут переадресованы все запросы нашего сайта.
 */

// Включим вывод всех ошибок на экран.
error_reporting(E_ALL);       // устанавливает уровень отслеживаемых ошибок интерпретатором php
ini_set('display_errors', 1); // дает команду интерпретатору php выводить все отслеживаемые ошибки в браузере

// Подключаем необходимые файлы
require __DIR__  . '/../vendor/liw/core/Application.php';
require __DIR__ . '/../app/App.php';
require __DIR__ . '/../app/Data1.php';
require __DIR__ . '/../app/Data2.php';

$app = new app\App();

$data1 = new app\Data1();
$data2 = new app\Data2();

