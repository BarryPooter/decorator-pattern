<?php

namespace App\Classes;

use App\Classes\Contracts\Computer;

class ComputerDecorator extends PlainComputer implements Computer
{
    protected $tempComputer;

    public function __construct(Computer $tempComputer)
    {
        $this->tempComputer = $tempComputer;
    }
}