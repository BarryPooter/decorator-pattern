<?php

namespace Tests\Unit;

use App\Classes\ComputerDecorator;
use App\Classes\Contracts\Computer;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Unit_ComputerDecoratorTest extends TestCase
{
    protected $sut;

    protected function setUp()
    {
        parent::setUp();
        $this->sut = new ComputerDecorator();
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
