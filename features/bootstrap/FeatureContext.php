<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Todo\TodoList;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    protected $todoList;
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->todoList = new TodoList();
    }
  
    /**
     * @When I add :item to the list
     */
    public function iAddToTheList($item)
    {
        $this->todoList->add($item);
    }
    
    /**
     * @Then I should have :count items in my Todo List
     */
    public function iShouldHaveItemsInMyTodoList($count)
    {
        return $this->todoList->count() == $count;
    }

    /**
     * @Then item :index value should be :value
     */
    public function itemValueShouldBe($index, $value)
    {
        return $this->todoList->get($index) == $value;
    }

     /**
     * @Given we have an empty Todo List
     */
    public function weHaveAnEmptyTodoList()
    {
        return $this->todoList->isEmpty();
    }
}
