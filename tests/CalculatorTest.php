<?php

use PHPUnit\Framework\TestCase;


require __DIR__ . "/../src/Calculator.php";


class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Codacy\SamplePhpProject\Calculator();
        $result = $calculator->add(10, 20);
        $this->assertEquals(30, $result);
    }

    public function testSubtract()
    {
        $calculator = new Codacy\SamplePhpProject\Calculator();
        $result = $calculator->subtract(30, 10);
        $this->assertEquals(20, $result);
    }
}
