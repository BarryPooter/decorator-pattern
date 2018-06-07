<?php

namespace Tests\Feature;

use App\Classes\ComputerDecorator;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Feature_DecorateComputerTest extends TestCase
{
    protected $sut;

    protected function setUp()
    {
        parent::setUp();
        $this->sut = new ComputerDecorator();
    }

    public function testInstantiation ()
    {
        $this->assertNotNull($this->sut);
    }
}
