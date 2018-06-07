<?php

namespace Tests\Unit;

use App\Classes\Contracts\Computer;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Unit_ComputerFloppyReaderTest extends TestCase
{
    protected $sut;

    public function setUp()
    {
        parent::setUp();
        $this->sut = new \App\Classes\ComputerFloppyReader();
    }

    public function testInstantiation ()
    {
        $this->assertNotNull($this->sut);
    }

    public function testInstance ()
    {
        $this->assertInstanceOf(Computer::class, $this->sut);
    }
}
