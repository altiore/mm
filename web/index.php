<?php

class Room
{
    private $color = 'red';

    public function changeColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
}
