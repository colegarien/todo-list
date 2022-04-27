<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Then I should have :arg1 product in the basket
     */
    public function iShouldHaveProductInTheBasket($arg1)
    {
        throw new Exception();
    }

    /**
     * @Then the overall basket price should be £:arg1
     */
    public function theOverallBasketPriceShouldBePs($arg1)
    {
        throw new Exception();
    }

    /**
     * @Then I should have :arg1 products in the basket
     */
    public function iShouldHaveProductsInTheBasket($arg1)
    {
        throw new Exception();
    }

     /**
     * @Given we have an empty Todo List
     */
    public function weHaveAnEmptyTodoList()
    {
        //todo: Add plugin for creating feature file text
        //todo: Finish this scenario we are working on
        throw new Exception();
    }

    /**
     * @When I add the :arg1 to the basket
     */
    public function iAddTheToTheBasket($arg1)
    {
        throw new Exception();
    }
}
