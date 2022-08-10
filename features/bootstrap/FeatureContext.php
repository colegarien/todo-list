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
    * @Given I have an empty Todo List
    */
   public function iHaveAnEmptyTodoList()
   {
       $this->todoList = new TodoList();
   }

    /**
     * @When I add :item to the list
     */
    public function iAddToTheList($item)
    {
        $this->todoList->addItem($item);
    }

    /**
     * @When I delete the item :index from Todo List
     */
    public function iDeleteTheItemFromTodoList($index)
    {
        $this->todoList->removeItem($index);
    }
    
    /**
     * @Then I should have :count items in my Todo List
     */
    public function iShouldHaveItemsInMyTodoList($count)
    {
        $this->assertEquals($this->todoList->countItems(), $count);
    }

    /**
     * @Then item :index value should be :value
     */
    public function itemValueShouldBe($index, $value)
    {
        $this->assertTrue($this->todoList->getItemDescription($index) == $value);
    }

        /**
     * @When I mark item :index as complete
     */
    public function iMarkItemAsComplete($index)
    {
        $this->todoList->completeItem($index);
    }

    /**
     * @Then Todo List is complete
     */
    public function todoListIsComplete()
    {
        $this->assertTrue($this->todoList->isComplete());
    }

     /**
     * @When I mark item :index as uncomplete
     */
    public function iMarkItemAsUncomplete($index)
    {
        $this->todoList->uncompleteItem($index);
    }

    /**
     * @Then Todo List is uncomplete
     */
    public function todoListIsUncomplete()
    {
        $this->assertFalse($this->todoList->isComplete());
    }
}
