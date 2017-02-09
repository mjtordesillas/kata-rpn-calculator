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
            if($value == '+') {
                array_push($outputArray, array_pop($outputArray) + array_pop($outputArray));
            } else if ($value == '-') {
                array_push($outputArray, -array_pop($outputArray) + array_pop($outputArray));
            } else if ($value == '*') {
                array_push($outputArray, array_pop($outputArray) * array_pop($outputArray));
            } else if ($value == '/') {
                $secondValue = array_pop($outputArray);
                $firstValue = array_pop($outputArray);
                array_push($outputArray, $firstValue / $secondValue);
            } else {
                array_push($outputArray, $value);
            }
        }

        $output = implode(' ', $outputArray);

        return $output;
    }
}