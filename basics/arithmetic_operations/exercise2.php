<?php
    function checkOddEven(int $number): void {
        if ($number % 2 == 0) {
            echo "Even number!";
        } else {
            echo "Odd number!";
        }
        echo "\nBye!\n";
    }
    checkOddEven(2);