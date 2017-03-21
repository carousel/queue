<?php
namespace Carousel;

interface QueueInterface
{
    /**
     * Add item to queue
    *
    * @param mix | item
    *
    * @return void
    */
    public function add($item);
}
