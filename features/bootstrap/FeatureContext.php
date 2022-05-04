<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Todo\TodoList;
use PHPUnit\Framework\TestCase;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends TestCase implements Context
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
        $this->todoList = new TodoList(); //Separate out the FeatureContext for multiple feature
    }
  
    /**
     * @Given we have an empty Todo List
     */
    public function weHaveAnEmptyTodoList()
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
     * @When I delete the item :index from Todo List
     */
    public function iDeleteTheItemFromTodoList($index)
    {
        $this->todoList->remove($index);
    }
    
    /**
     * @Then I should have :count items in my Todo List
     */
    public function iShouldHaveItemsInMyTodoList($count)
    {
        $this->assertEquals($this->todoList->count(),$count);
    }

    /**
     * @Then item :index value should be :value
     */
    public function itemValueShouldBe($index, $value)
    {
        $this->assertTrue($this->todoList->get($index) == $value);
    }
}
