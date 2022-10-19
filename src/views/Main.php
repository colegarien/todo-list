<?php
namespace Todo\Views;

class Main {
    private OutputInterface $output;

    public function __construct(OutputInterface $output)
    {
        $this->output = $output;
    }

    public function run(): void
    {
        $this->output->print(OutputString::OUTPUT_MESSAGE);
    }
}



// $keepEditingTodoList = true;
// $handle = fopen ("php://stdin","r");
// echo "Welcome To The TODO App!\n";
// echo "You can exit anytime by just typing '~exit'\n";
// while ($keepEditingTodoList) {
// echo "What Action would you like to take?\n";
// echo "1 - Add Item\n
// 2 - Remove Item\n
// 3 - Show Item\n
// 4 - Complete Item\n
// 5 - Uncomplete Item\n";
// echo "\nEnter Input: ";
    
//     $line = trim(fgets($handle));
//     if($line === "1") {
//         echo "You are in Add Item menu!\n";
//     }

//     if($line === "2") {
//         echo "You are in Remove Item menu!\n";
//     }

//     if($line === "3") {
//         echo "Here are your TODO Items:\n";
//     }

//     if($line === "4") {
//         echo "You are in complete Item menu!\n";
//     }

//     if($line === "5") {
//         echo "Which Item do you want to uncomplete!\n";
//     }

//     if ($line === '~exit') {
//         $keepEditingTodoList = false;
//         echo "\nGoodbye!\n";
//     }
//     if ($line === 'show items') {
//         $keepEditingTodoList = false;
//         echo "\nItems: ";
//     }
// }