<?php
namespace Todo;

class TodoList 
{
    private array $list = [];

    public function add(string $item): void
    {
        $this->list[] = $item; 
    }

    public function isEmpty(): bool
    {
        return empty($this->list);
    }
}