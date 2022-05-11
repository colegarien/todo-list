Feature: Todo List
  In order to view todo list items
  As a productive person
  I need to be able to look at items in my list

  Scenario: Showing all items added to Todo List
    Given we have an empty Todo List
    When I add 1 to the list
    And I add 2 to the list
    And I add 3 to the list
    Then I should have 3 items in my Todo List
    And item 0 value should be 1
    And item 1 value should be 2
    And item 2 value should be 3
# todo: consider saying something like - And 1st item value should be 1
  Scenario: Deleting items from Todo List
    Given we have an empty Todo List
    When I add 1 to the list
    And I add 2 to the list
    And I add 3 to the list
    And I delete the item 1 from Todo List
    Then item 0 value should be 1
    And item 1 value should be 3
# todo: We need to keep working on the scenario below.
# todo: Next time we'll add to FeatureContext the functions we need to hook into but will not be implemented yet
# todo: We will start doing TDD with Unit Test to create the behavior we want to hook into later.
  Scenario: Complete items from Todo List
    Given we have an empty Todo List
    When I add 1 to the list
    And I add 2 to the list
    And I mark item 0 as complete
    And I mark item 1 as complete
    Then Todo List is complete