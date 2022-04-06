<?php
namespace Todo\Test;
use PHPUnit\Framework\TestCase;
include_once __DIR__ . "/../vendor/autoload.php";

use Todo\TodoList;

class TodoListTest extends TestCase 
{
    public function testEmptyList() {
        $todoList = new TodoList();

        self::assertTrue($todoList->isEmpty());
    }

    public function testAddToList() {
        $todoList = new TodoList();
        $todoList->add("item 1");
        self::assertFalse($todoList->isEmpty());
    }
    
    public function testRetrieveList() {
        $todoList = new TodoList();
        $todoList->add("item 1");
        $todoList->add('item 2');

        self::assertSame("item 1", $todoList->get(0));
        self::assertSame("item 2", $todoList->get(1));
    }

    public function testRemoveFromList() {
        $todoList = new TodoList();
        $todoList->add("item 1");
        $todoList->add('item 2');

        $index = 0;
        $todoList->remove($index);

        self::assertEquals(1,$todoList->count());
        self::assertEquals("item 2",$todoList->get(0));
    }

    public function testGetNonexistantItem() {
        $this->expectException(\Exception::class);
        
        $todoList = new TodoList();
        $todoList->get(0);
    }
}