<?php

namespace App\Classes;

use \App\Classes\Contracts\Computer;

class PlainComputer implements Computer
{
    protected $parts;

    public function __construct()
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
        return (float) null;
    }
}