<?php
namespace Todo\Test\PHPUnitTests;

use Exception;
use PHPUnit\Framework\TestCase;

use Todo\TodoList;

class TodoListTest extends TestCase 
{
    private TodoList $todoList;

    //TODO Discuss whether to implement UI or Persistance - Going with UI
    //TODO Later question - Do we go API route first? or straight up console first?
    //TODO We want to make our ideal UI with Mock Data for now to just concern ourselves with UI stuff to get the ball rolling, then hook in Business Logic
    //TODO We will start with simple console app to get done quickly, then web
    
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

    public function testCompleteTodoList_withNonExistingIndex() {
       
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("Item can't be marked complete");
        $this->todoList->addItem("item 1");
        $this->todoList->addItem('item 2');
        
        $this->todoList->completeItem(2);
        self::assertTrue($this->todoList->isComplete());
    }

    public function testUncompleteTodoList() {
        $this->todoList->addItem("item 1");
        $this->todoList->addItem('item 2');

        $this->todoList->completeItem(0);
        $this->todoList->completeItem(1);
        self::assertTrue($this->todoList->isComplete());

        $this->todoList->uncompleteItem(0);
        self::assertFalse($this->todoList->isComplete());   
    }
}