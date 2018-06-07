<?php

namespace Tests\Unit;

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
        $this->sut = new \App\Classes\PlainComputer();
    }

    public function testInstantiation () : void
    {
        $this->assertNotNull($this->sut);
    }
}
