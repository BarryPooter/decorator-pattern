<?php

namespace App\Classes;

use \App\Classes\Contracts\Computer;

class PlainComputer implements Computer
{
    /**
     * PlainComputer constructor.
     */
    public function __construct()
    {
    }

    public function getParts(): string
    {
        // TODO: Implement getParts() method.
    }

    public function getCost(): float
    {
        // TODO: Implement getCost() method.
    }
}