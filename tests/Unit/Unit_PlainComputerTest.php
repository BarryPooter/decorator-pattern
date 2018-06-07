<?php

namespace Tests\Unit;

use App\Classes\Contracts\Computer;
use App\Classes\PlainComputer;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Unit_PlainComputerTest extends TestCase
{
    protected $sut; // System Under Test.

    protected function setUp()
    {
        parent::setUp();

        // You can only have one dependency, which is the sut.
        $this->sut = new PlainComputer();
    }

    public function testInstantiation () : void
    {
        $this->assertNotNull($this->sut);
    }

    // See if the PlainComputer is a Computer.
    public function testContractBound ()
    {
        $this->assertInstanceOf(Computer::class, $this->sut);
    }

    public function testGetParts ()
    {
        $this->assertTrue(is_string($this->sut->getParts()));
    }

    public function testGetCost ()
    {
        $this->assertTrue(is_float($this->sut->getCost()));
    }
}
