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
        $i = 0;
        foreach ($todoList as $key => $value) {
            self::assertSame($i, $key);
            self::assertSame("item " . $i + 1, $value);
            $i++;
        }
        //todo figure out how to debug Unit Test
        //todo figure out if auto complete is possible
    }

    public function testRemoveFromList() {

    }
}