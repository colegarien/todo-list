<?php
namespace Todo\Test\PHPUnitTests;
use PHPUnit\Framework\TestCase;
include_once __DIR__ . "/../vendor/autoload.php";

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

        self::assertSame("item 1", $this->todoList->getItem(0));
        self::assertSame("item 2", $this->todoList->getItem(1));
    }

    public function testRemoveFromList() {
        $this->todoList->addItem("item 1");
        $this->todoList->addItem('item 2');

        $index = 0;
        $this->todoList->removeItem($index);

        self::assertEquals(1, $this->todoList->countItems());
        self::assertEquals("item 2", $this->todoList->getItem(0));
    }

    public function testGetNonexistantItem() {
        $this->expectException(\Exception::class);
        $this->todoList->getItem(0);
    }
    
    // public function testCompleteTodoList() { //TODO: fix this test
    //     $this->todoList->addItem("item 1");
    //     $this->todoList->addItem('item 2');

    //     $this->todoList->completeItem(0);
    //     self::assertFalse($this->todoList->isComplete());
        
    //     $this->todoList->completeItem(1);
    //     self::assertTrue($this->todoList->isComplete());
    // }

    

    // TODO let's write some Behat tests!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    // TODO figure out the interface for how we wanna iterate/apply/something across the whole list
    //    - do we do like LINQ, have select/any/contains/etc etc
    //    - do we just have a powerful like "map" function
    //    - or something else



}