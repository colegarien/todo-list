<?php
namespace Todo\Test\PHPUnitTests\Views;

use Todo\Views\OutputInterface;

class OutputPrinterSpy implements OutputInterface {
    public string $output;
    public function print(string $output): void
    {
        $this->output = $output;
    }
}