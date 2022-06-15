<?php
namespace Todo\Test\PHPUnitTests;
use PHPUnit\Framework\TestCase;

use Todo\TodoList;

class TodoListTest extends TestCase 
{
    private TodoList $todoList;

    protected function setUp(): void
    {
        $this->todoList = new TodoList();
    }

    public function testEmptyList() {
        self::assertTrue($this->todoList->isEmpty());
    }

    public function testAddToList() {
        $this->todoList->addItem("item 1");
        self::assertFalse($this->todoList->isEmpty());
    }
    
    public function testRetrieveList() {
        $this->todoList->addItem("item 1");
        $this->todoList->addItem('item 2');

        self::assertSame("item 1", $this->todoList->getItemDescription(0));
        self::assertSame("item 2", $this->todoList->getItemDescription(1));
    }

    public function testRemoveFromList() {
        $this->todoList->addItem("item 1");
        $this->todoList->addItem('item 2');

        $index = 0;
        $this->todoList->removeItem($index);

        self::assertEquals(1, $this->todoList->countItems());
        self::assertEquals("item 2", $this->todoList->getItemDescription(0));
    }

    public function testGetNonexistantItem() {
        $this->expectException(\Exception::class);
        $this->todoList->getItemDescription(0);
    }
    
    public function testCompleteTodoList() {
        $this->todoList->addItem("item 1");
        $this->todoList->addItem('item 2');

        $this->todoList->completeItem(0);
        self::assertFalse($this->todoList->isComplete());
        
        $this->todoList->completeItem(1);
        self::assertTrue($this->todoList->isComplete());
    }

    // todo: implement uncomplete functionality

    // TODO let's write some Behat tests!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
}