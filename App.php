<?php
/**
 * UI Functionality.. Use Case???
 * 1. Welcome To The Todo App
* 2. Show Empty Todo List
* 	- Tell user at any time they can exit by entering "exit"
* 3. Allow user to Add Items Into The List
* 	- What Action would you like to take?
		*Add Item
		*Remove Item
		*Show Item
		*Complete Item
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