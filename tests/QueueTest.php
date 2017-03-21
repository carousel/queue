<?php
namespace Tests;

use Carousel\Queue;
use Carousel\QueueInterface;

class QueueTest extends \PHPUnit_Framework_TestCase
{
    /**
    * Set up bus instance
    * @depends queueData
    */
    public function setUp()
    {
        $data = [];
        $this->queue = new Queue([]);
    }
    /**
     * Test that class implements queue interface
     *
     * @test
     */
    public function queueImplementsInterface()
    {
        $this->assertTrue($this->queue instanceof QueueInterface);
    }
    /**
     * Test that command is executed via bus
     *
     * @test
     */
    //public function commandIsExecutedAndDispatchedToHandler()
    //{
        //$filename = 'filename.txt';
        //$this->bus->handle($filename, $this->command);
        //$this->assertTrue(file_exists($filename));
        //unlink($filename);
        //$this->assertNotTrue(file_exists($filename));
    //}
}
