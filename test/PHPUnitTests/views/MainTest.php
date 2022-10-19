<?php

namespace Todo\Test\PHPUnitTests\Views;

use PHPUnit\Framework\TestCase;
use Todo\Views\Main;
use Todo\Views\OutputString;

class MainTest extends TestCase 
{
    // todo: Keep making the UI Unit Testable then continue
    public function testPrintWelcomeMessage(): void
    {
        $outputPrinter = new OutputPrinterSpy();
        $main = new Main($outputPrinter);
        $main->run();

        self::assertSame(OutputString::OUTPUT_MESSAGE, $outputPrinter->output);
    }    
}