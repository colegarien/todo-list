<?php

namespace Todo\Test\PHPUnitTests\Views;

use PHPUnit\Framework\TestCase;
use Todo\Views\Main;

class MainTest extends TestCase 
{
    // todo: Keep making the UI Unit Testable then continue
    public function testPrintWelcomeMessage(): void
    {
        $outputPrinter = new OutputPrinterSpy();
        $main = new Main();
        $main->run();

        $this->assertFalse(false);
    }    
}