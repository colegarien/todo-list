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
        $this->todoList->add("item 1");
        self::assertFalse($this->todoList->isEmpty());
    }
    
    public function testRetrieveList() {
        $this->todoList->add("item 1");
        $this->todoList->add('item 2');

        self::assertSame("item 1", $this->todoList->get(0));
        self::assertSame("item 2", $this->todoList->get(1));
    }

    public function testRemoveFromList() {
        $this->todoList->add("item 1");
        $this->todoList->add('item 2');

        $index = 0;
        $this->todoList->remove($index);

        self::assertEquals(1, $this->todoList->count());
        self::assertEquals("item 2", $this->todoList->get(0));
    }

    public function testGetNonexistantItem() {
        $this->expectException(\Exception::class);
        $this->todoList->get(0);
    }

    //todo: figure out how to refactor names because we need that terribly
    //todo: then refactor to todoList->removeItem .. ->addItem ... ->completeItem, then finish the test below 
    // public function testCompleteTodoList() {
    //     $this->todoList->add("item 1");
    //     $this->todoList->add('item 2');

    //     $this->todoList->completeItem(0);
    //     $this->todoList->completeItem(1);

    //     self::assertTrue($this->todoList->isComplete());
    // }

    // TODO let's write some Behat tests!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    // TODO figure out the interface for how we wanna iterate/apply/something across the whole list
    //    - do we do like LINQ, have select/any/contains/etc etc
    //    - do we just have a powerful like "map" function
    //    - or something else



}