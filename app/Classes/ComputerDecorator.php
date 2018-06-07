<?php

namespace App\Classes;

use App\Classes\Contracts\Computer;

class ComputerDecorator extends PlainComputer implements Computer
{
    protected $tempComputer;

    public function __construct(Computer $tempComputer)
    {
        parent::__construct();
        $this->tempComputer = $tempComputer;
    }

    public function getCost () : float
    {
        return (float) (new PlainComputer())->getCost() + (float) $this->tempComputer->getCost();
    }
}