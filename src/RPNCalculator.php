<?php

namespace RPNCalculator;

class RPNCalculator
{
    public function calculate($input)
    {
        $inputArray = explode(' ', $input);
        $outputArray = [];

        foreach($inputArray as $value)
        {
            if($this->isSymbol($value)){
                $outputArray = $this->performOperation($outputArray, $value);
            } else {
                array_push($outputArray, $value);
            }
        }

        $output = implode(' ', $outputArray);

        return $output;
    }

    private function isSymbol($value)
    {
        if(strpos('+-*/', $value) !== false){
            return true;
        }

        return false;
    }

    private function performOperation($outputArray, $symbol)
    {
        $resultArray = $outputArray;
        $secondValue = array_pop($resultArray);
        $firstValue = array_pop($resultArray);
        $result = 0;

        switch($symbol) {
            case '+':
                $result = $firstValue + $secondValue;
                break;
            case '-':
                $result = $firstValue - $secondValue;
                break;
            case '*':
                $result = $firstValue * $secondValue;
                break;
            case '/':
                $result = $firstValue / $secondValue;
                break;
        }

        array_push($resultArray, $result);

        return $resultArray;
    }
}