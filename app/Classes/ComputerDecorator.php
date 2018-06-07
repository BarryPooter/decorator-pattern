<?php

namespace App\Classes;

use App\Classes\Contracts\Computer;

class ComputerDecorator extends PlainComputer implements Computer
{
    protected $tempComputer;

    public function __construct (Computer $tempComputer = null)
    {
        parent::__construct();

        if (!empty($tempComputer)) {
            $this->tempComputer = $tempComputer;
            $this->cost += $this->tempComputer->getCost();
        }
    }

    public function getCost () : float
    {
        return parent::getCost() + (float) $this->cost;
    }
}