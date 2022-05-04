<?php
namespace Todo;

class TodoList
{
    private $list = [];

    public function add(string $item): void
    {
        $this->list[] = $item; 
    }

    public function remove(int $index): void
    {
        unset($this->list[$index]);
        $this->list = array_values($this->list);
    }

    public function get(int $index): string
    {
        if(!isset($this->list[$index]))
            throw new \Exception('Item Does Not Exist'); 

        return $this->list[$index];
    }

    //TODO add complete/uncomplete feature


    public function isEmpty(): bool
    {
        return empty($this->list);
    }

    public function count(): int
    {
        return count($this->list);
    }
}