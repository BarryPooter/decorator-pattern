<?php

namespace App\Classes;

use App\Classes\Contracts\Computer;

class ComputerMotherboard extends ComputerDecorator implements Computer
{
    public function __construct(Computer $tempComputer = null)
    {
        parent::__construct($tempComputer);
    }

    public function getParts(): string
    {
    }

    public function getCost(): float
    {
        return $this->cost + (float) 80;
    }
}