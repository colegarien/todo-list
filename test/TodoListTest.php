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
}