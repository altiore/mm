<?php

namespace app;

class Loader
{
    /**
     * Ассоциативный массив.
     * Ключи содержат префикс пространства имён,
     * значение — массив базовых директорий для классов в этом пространстве имён.
     *
     * @var array
     */
    protected $prefixToPath = [];

    /**
     * Регистрируем автозагрузчик
     * @return void
     */
    public function register()
    {
        // регистрирует в качестве функции автозагрузчика метод данного класса loadClass
        spl_autoload_register([$this, 'loadClass'], true);
    }

    /**
     * Добавляем соответствующие префиксам базовые директории
     * @param $prefix
     * @param $base_dir
     * @param bool|false $prepend
     * @return void
     */
    public function addNamespace($prefix, $base_dir, $prepend = false)
    {
        // нормализуем префикс пространства имён
        $prefix = trim($prefix, '\\') . '\\';

        // нормализуем базовую директорию так, чтобы всегда присутствовал разделитель в конце
        $base_dir = rtrim($base_dir, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;

        // инициализируем массив префиксов пространства имён
        if (isset($this->prefixToPath[$prefix]) === false) {
            $this->prefixToPath[$prefix] = array();
        }

        // сохраняем базовую директорию для префикса пространства имён
        if ($prepend) {
            array_unshift($this->prefixToPath[$prefix], $base_dir);
        } else {
            array_push($this->prefixToPath[$prefix], $base_dir);
        }
    }

    /**
     * Загружаем файл, соответствющий классу.
     * @param $class
     * @return bool|string
     */
    public function loadClass($class)
    {
        // начальное значение префикса пусть будет пустой строкой
        $prefix = '';

        // разобьем название класса на массив строк, используя в качестве разделителя "\"
        $arr = explode('\\', $class);

        // пока в нашем массиве еще есть элементы, пытаемся найти и загрузить файл
        while(count($arr) > 0){
            // добавляем в конец префикса первый элемент из массива
            $prefix .= array_shift($arr) . '\\';

            // пытаемся загрузить файл
            $file = $this->loadMappedFile($prefix, $arr);

            // если удалось загрузить файл - возвращаем файл
            if($file){
                return $file;
            }
        }

        // если не нашли класс - возвращаем false
        return false;
    }

    /**
     * @param $prefix
     * @param $arr
     * @return bool|string
     */
    protected function loadMappedFile($prefix, $arr)
    {
        // если в массиве, сопоставляющем префикс и базовую директорию отсутствует текущий префикс
        // то возвращаем false
        if(isset($this->prefixToPath[$prefix]) === false){
            return false;
        }

        // проходим по всем базовым директориям, соответсвующим текущему префиксу
        // и пытаемся загрузить файл
        foreach($this->prefixToPath[$prefix] as $base_dir){
            $file = $base_dir . implode($arr, DIRECTORY_SEPARATOR) . '.php';
            // если нам удается загрузить файл - возвращаем этот файл
            if($this->requireFile($file)){
                return $file;
            }
        }

        return false;
    }

    /**
     * @param $file
     * @return bool
     */
    protected function requireFile($file)
    {
        if(file_exists($file)){
            require_once $file;
            return true;
        }
        return false;
    }
}
