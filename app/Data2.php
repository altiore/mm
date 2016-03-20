<?php
namespace app;


class Data2
{
    private $videos = "Данные о видео из второго объекта";

    public function get()
    {
        return $this->videos;
    }
}
