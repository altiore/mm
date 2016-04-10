<?php
namespace liw\traits;

trait HelloWorld
{
    public function helloWorld()
    {
        echo 'Hello World!';
    }

    public function boot()
    {
        echo 'Я в трейте HelloWorld';
    }
}
