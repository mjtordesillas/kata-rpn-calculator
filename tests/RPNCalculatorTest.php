<?php

use RPNCalculator\RPNCalculator;

class RPNCalculatorTest extends \PHPUnit\Framework\TestCase
{
    public function testOneNumberInputReturnsOneNumberOutput()
    {
        $calculator = new RPNCalculator();

        $input = '3';
        $output = $calculator->calculate($input);

        $this->assertEquals($input, $output);
    }

    public function testTwoNumberInputsReturnTwoNumberOutputs()
    {
        $calculator = new RPNCalculator();

        $input = '5 7';
        $output = $calculator->calculate($input);

        $this->assertEquals($input, $output);
    }

    public function testTwoNumbersAndSumReturnSumAsOutput()
    {
        $calculator = new RPNCalculator();

        $input = '5 3 +';
        $expectedOutput = '8';
        $actualOutput = $calculator->calculate($input);

        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testTwoNumbersAndSubstractionReturnSubstractionAsOutput()
    {
        $calculator = new RPNCalculator();

        $input = '6 2 -';
        $expectedOutput = '4';
        $actualOutput = $calculator->calculate($input);

        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testTwoNumbersAndMultiplicationReturnMultiplicationAsOutput()
    {
        $calculator = new RPNCalculator();

        $input = '3 5 *';
        $expectedOutput = '15';
        $actualOutput = $calculator->calculate($input);

        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testTwoNumbersAndDivisionReturnDivisionAsOutput()
    {
        $calculator = new RPNCalculator();

        $input = '9 3 /';
        $expectedOutput = '3';
        $actualOutput = $calculator->calculate($input);

        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testTwoOperationsAndDivisionReturnTwoNumbersOutput()
    {
        $calculator = new RPNCalculator();

        $input = '9 3 / 4 5 +';
        $expectedOutput = '3 9';
        $actualOutput = $calculator->calculate($input);

        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testNestedOperationsAndReturnOneNumberOutput()
    {
        $calculator = new RPNCalculator();

        $input = '3 5 8 * 7 + *';
        $expectedOutput = '141';
        $actualOutput = $calculator->calculate($input);

        $this->assertEquals($expectedOutput, $actualOutput);
    }
}