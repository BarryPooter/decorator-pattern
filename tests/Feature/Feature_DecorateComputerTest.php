<?php

namespace Tests\Feature;

use App\Classes\ComputerDecorator;
use App\Classes\ComputerFloppyReader;
use App\Classes\ComputerMotherboard;
use App\Classes\PlainComputer;
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

    // Test if the cost of the PlainComputer
    // and ComputerMotherboard add up.
    public function testCostCalculation ()
    {
        $plainComputerCost = (new PlainComputer())->getCost();
        $motherboardCost = (new ComputerMotherboard())->getCost();

        $this->assertNotEquals($plainComputerCost, $this->sut->getCost());
        $this->assertEquals(($plainComputerCost + $motherboardCost), $this->sut->getCost());
    }

    public function testMultipleDecorations ()
    {
        $plainComputerCost = (new PlainComputer())->getCost();
        $motherboardCost = (new ComputerMotherboard())->getCost();
        $floppyReaderCost = (new ComputerFloppyReader())->getCost();

        $calculation = $plainComputerCost + $motherboardCost + $floppyReaderCost;
        $this->sut = new ComputerDecorator(new ComputerMotherboard(new ComputerFloppyReader()));

        $this->assertEquals($calculation, $this->sut->getCost());
    }
}
