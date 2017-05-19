<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Jlttt\Pentaminoes\Program;

class ProgramTest extends PHPUnit_Framework_TestCase
{
    protected $program;

    public function setUp()
    {
        $this->program = new Program();
    }

    public function testDescription()
    {
        $this->assertGreaterThan(0, count($this->program->getDescription()));
    }
}