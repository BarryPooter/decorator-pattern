<?php
namespace App\Classes\Contracts;

interface Computer
{
    public function getParts () : string;
    public function getCost () : float;
}