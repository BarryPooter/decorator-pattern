<?php

namespace Tests\Feature;

use App\Classes\ComputerDecorator;
use App\Classes\ComputerMotherboard;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Feature_DecorateComputerTest extends TestCase
{
    protected $sut;

    protected function setUp()
    {
        parent::setUp();
        $this->sut = new ComputerDecorator(new ComputerMotherboard());
    }

    public function testInstantiation ()
    {
        $this->assertNotNull($this->sut);
    }
}