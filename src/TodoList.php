<?php
namespace Todo;

use Countable;
use Iterator;

class TodoList implements Iterator, Countable
{
    private $position = 0;
    private $list = [];

    public function __construct()
    {
        $this->position = 0;
    }

    public function add(string $item): void
    {
        $this->list[] = $item; 
    }

    public function remove(int $index): void
    {
        unset($this->list[$index]);
    }


    public function isEmpty(): bool
    {
        return empty($this->list);
    }

    public function current()
    {
        return $this->list[$this->position];
    }

    public function next() :void
    {
        ++$this->position; 
    }

    public function key()
    {
        return $this->position;
    }

    public function valid() :bool
    {
        return isset($this->list[$this->position]);
    }

    public function rewind() :void
    {
        $this->position = 0;
    }

    public function count(): int
    {
        return count($this->list);
    }
}