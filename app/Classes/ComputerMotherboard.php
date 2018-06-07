<?php

namespace App\Classes;

use App\Classes\Contracts\Computer;

class ComputerMotherboard implements Computer
{

    public function getParts(): string
    {
        // TODO: Implement getParts() method.
    }

    public function getCost(): float
    {
        return (float) 80;
    }
}