<?php
    //todo print the largest number
    function exercise1(): int {
        $number1 = (int) readline("Input the 1st number: ");
        $number2 = (int) readline("Input the 2nd number: ");
        $number3 = (int) readline("Input the 3rd number: ");

        if ($number1 > $number2) {
            $biggest = $number1;
        } else {
            $biggest = $number2;
        }
        if ($biggest < $number3) {
            $biggest = $number3;
        }
        return $biggest;
    }
    echo exercise1();