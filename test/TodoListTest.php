<?php
namespace Todo\Test;
use PHPUnit\Framework\TestCase;
include_once __DIR__ . "../vendor/autoload.php";

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
        foreach ($todoList as $key => $value) {
            self::assertSame(0, $key);
            self::assertSame("item 1", $value);
        }

        self::assertFalse(false); //todo figure out how we will retrive items




    }
}