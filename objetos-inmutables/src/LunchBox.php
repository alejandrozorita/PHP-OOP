<?php

namespace ObjetosInmutables;

use Exception;
use Traversable;

class LunchBox implements \IteratorAggregate, \Countable
{
    protected $food = [];
    protected $original = true;


    public function __construct(array $food = [])
    {
        $this->food = $food;
    }


    public function __clone()
    {
        $this->original = false;
    }


    public function all()
    {
        return $this->food;
    }


    public function filter($callback)
    {
        $this->food = array_filter($this->food, $callback);
    }


    public function shift()
    {
        return array_shift($this->food);
    }


    public function isEmpty()
    {
        return empty($this->food);
    }
    

    /**
     * @inheritDoc
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->food);
    }


    /**
     * @inheritDoc
     */
    public function count()
    {
        return count($this->food);
    }

}