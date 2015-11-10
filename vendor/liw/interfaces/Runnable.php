<?php

namespace liw\contracts;

interface Runnable
{
    /**
     * @param $config
     * @return void
     */
    public function run($config);
}
