<?php
/**
 * ***UI Functionality.. Use Case??? Maybe after UI functionality is defined
 * 1. Welcome To The Todo App
* 2.Tell user at any time they can exit an action by entering "~exit". Continue (yes/~exit)?
* 3. Allow user to Manage Items Into The List
* 	- What Action would you like to take?
		*1 - Add Item
		*2 - Remove Item
		*3 - Show Item
		*4 - Complete Item
        *5 - Uncomplete Item
    * Add Item UI
    *   Add Item: _____
    *   User can enter ~exit to go back to main menu
    *
 */
$keepEditingTodoList = true;
$handle = fopen ("php://stdin","r");
while ($keepEditingTodoList) {
    echo "Add Item : ";
    $line = trim(fgets($handle));
    if ($line === 'exit') {
        $keepEditingTodoList = false;
        echo "\nGoodbye!\n";
    }
    if ($line === 'show items') {
        $keepEditingTodoList = false;
        echo "\nItems: ";
    }
}