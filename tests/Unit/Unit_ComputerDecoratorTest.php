<?php

namespace Tests\Unit;

use App\Classes\ComputerDecorator;
use App\Classes\Contracts\Computer;
use Tests\TestCase;

class PartDouble implements Computer {
    public function getParts(): string
    {
        return (string) null;
    }

    public function getCost(): float
    {
        return (float) null;
    }
}

class Unit_ComputerDecoratorTest extends TestCase
{
    protected $sut;

    protected function setUp()
    {
        parent::setUp();
        $this->sut = new ComputerDecorator(new PartDouble());
    }

    public function testInstantiation()
    {
       $this->assertNotNull($this->sut);
    }

    public function testInstance()
    {
        $this->assertInstanceOf(Computer::class, $this->sut);
    }

}
