<?php
namespace app;

class Data1
{
    /**
     * @var string Эти данные инкапсулированы в объект класса Data1
     */
    private $lessons = 'Первые данные';

    /**
     * Этот метод позволяет получить данные и, предварительно обработать их
     * а значит - это демонстрация инкапсуляции
     * @return string
     */
    public function get()
    {
        return $this->lessons;
    }
}
