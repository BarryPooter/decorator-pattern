<?php

namespace App\Classes;

use \App\Classes\Contracts\Computer;

class PlainComputer implements Computer
{
    public function getParts(): string
    {
        return (string) null;
    }

    public function getCost(): float
    {
        return (float) null;
    }
}