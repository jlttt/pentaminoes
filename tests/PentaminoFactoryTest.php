<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Jlttt\Pentaminoes\PentaminoFactory;
use Jlttt\Pentaminoes\Pentamino;

class PentaminoFactoryTest extends PHPUnit_Framework_TestCase
{
    protected $pentaminoFactory;
    protected $allPentaminoes;

    public function setUp()
    {
        $this->pentaminoFactory = new PentaminoFactory();
        $this->allPentaminoes = $this->pentaminoFactory->all();
    }

    public function testThereAre63Elements()
    {
        $this->assertEquals(count(PentaminoFactory::PENTAMINO_RAW_LIST), count($this->allPentaminoes));
    }

    public function testAllElementsArePentaminoes()
    {
        foreach($this->allPentaminoes as $pentamino) {
            $this->assertInstanceOf(Pentamino::class, $pentamino);
        }
    }

    public function testThirdPentaminoIsAsExpected()
    {
        $pentamino = $this->allPentaminoes[2];
        $this->assertEquals(2, $pentamino->getType());
        $this->assertEquals(0, $pentamino->getOffset(1));
        $this->assertEquals(9, $pentamino->getOffset(2));
        $this->assertEquals(10, $pentamino->getOffset(3));
        $this->assertEquals(11, $pentamino->getOffset(4));
        $this->assertEquals(20, $pentamino->getOffset(5));
    }

    public function testSeventhPentaminoIsAsExpected()
    {
        $pentamino = $this->allPentaminoes[6];
        $this->assertEquals(3, $pentamino->getType());
        $this->assertEquals(0, $pentamino->getOffset(1));
        $this->assertEquals(8, $pentamino->getOffset(2));
        $this->assertEquals(9, $pentamino->getOffset(3));
        $this->assertEquals(10, $pentamino->getOffset(4));
        $this->assertEquals(18, $pentamino->getOffset(5));
    }
}