<?php
namespace Todo;

class TodoList
{
    /**
     * @var Item[]
     */
    private $items = [];

    public function addItem(string $itemDescription): void
    {
        $item = new Item();
        $item->description = $itemDescription;
        $this->items[] = $item;
    }

    public function removeItem(int $index): void
    {
        unset($this->items[$index]);
        $this->items = array_values($this->items);
    }

    public function getItemDescription(int $index): string
    {
        if(!isset($this->items[$index]))
            throw new \Exception('Item Does Not Exist'); 

        return $this->items[$index]->description;
    }

    public function isEmpty(): bool
    {
        return empty($this->items);
    }

    public function countItems(): int
    {
        return count($this->items);
    }

    public function completeItem(int $index): void
    {
        $this->items[$index]->isComplete = true;
    }

    public function isComplete(): bool
    {
        foreach($this->items as $item) {
            if (!$item->isComplete) {
                return false;
            }
        }
        return true;
    }
}