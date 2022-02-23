<?php
namespace Todo;

use Iterator;

class TodoList implements Iterator
{
    private $position = 0;
    private $list = [];

    public function add(string $item): void
    {
        $this->list[] = $item; 
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
        return array_key_exists($this->position, $this->list);
    }

    public function rewind() :void
    {
        --$this->position;
    }
}