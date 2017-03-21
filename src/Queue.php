<?php
namespace Carousel;

use Carousel\QueueInterface;

class Queue implements QueueInterface
{
    /**
     * Queue data provider
     */
    public $data;
    /**
    * Initialize queue
    */
    public function __construct($data)
    {
        $this->data = $data;
    }
    /**
    * Add item to queue
    *
    * @
    */
    public function add($item)
    {
    }
}
