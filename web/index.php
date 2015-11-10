<?php
/**
 * Это единая точка входа для нашего приложения.
 * На этот файл будут переадресованы все запросы нашего сайта.
 */

// Включим вывод всех ошибок на экран.
error_reporting(E_ALL);       // устанавливает уровень отслеживаемых ошибок интерпретатором php
ini_set('display_errors', 1); // дает команду интерпретатору php выводить все отслеживаемые ошибки в браузере

// Подключаем файл, где храниться автозагрузчик классов
require __DIR__ . '/../app/Loader.php';

// создаем экземпляр класса автозагрузчика
$loader = new \app\Loader();

// добавляем соответствующие нэймспэйсу директории
$loader->addNamespace('app', realpath(__DIR__ . '/../app'));
$loader->addNamespace('liw\\core',  realpath(__DIR__ . '/../vendor/liw/core'));
$loader->addNamespace('liw\\contracts',  realpath(__DIR__ . '/../vendor/liw/interfaces'));

// регистрируем автозагрузчик
$loader->register();

// создали новый объект класса
$app = new \app\App();

// имеем доступ к свойству, добавленному при помощи trait-а
$app->validate('Какая-то переменная');
