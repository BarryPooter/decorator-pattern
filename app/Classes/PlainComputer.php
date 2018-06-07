<?php

namespace App\Classes;

use \App\Classes\Contracts\Computer;

class PlainComputer implements Computer
{
    protected $parts;
    protected $tempComputer;
    protected $cost;

    public function __construct(Computer $tempComputer = null)
    {
        $this->parts = (array) null;
        $this->parts[] = 'case';
    }

    public function getParts(): string
    {
        return (string) implode(',', $this->parts);
    }

    public function getCost(): float
    {
        return (float) 80;
    }
}