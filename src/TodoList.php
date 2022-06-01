<?php
namespace Todo;

class TodoList
{
    private $list = [];

    public function addItem(string $item): void
    {
        $this->list[] = $item; 
    }

    public function removeItem(int $index): void
    {
        unset($this->list[$index]);
        $this->list = array_values($this->list);
    }

    public function getItems(int $index): string
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

    public function countItems(): int
    {
        return count($this->list);
    }

    public function completeItem($index): void //TODO: implement this
    {
        return;
    }

    public function isComplete(): bool //TODO: implement this
    {
        return true;
    }
}