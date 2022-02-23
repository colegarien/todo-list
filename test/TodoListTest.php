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
        // todo: need to assert that we get the expected item when we try to retrieve the added item with this test or another one
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
        //todo figure out how to debug



    }
}