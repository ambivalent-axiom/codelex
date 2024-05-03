<?php
    //todo print if number is positive or negative
    function exercise2(): string {
        $number = (int) readline("Enter the number.: ");
        if ($number < 0) {
            return "Negative";
        } elseif ($number === 0) {
            return "Zero";
        } else {
            return "Positive";
        }
    }
    echo exercise2();