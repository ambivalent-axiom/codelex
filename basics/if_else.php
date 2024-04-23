<?php
    function exercise1(int $integer=10, string $string="10")
    {
        if ($integer == $string) {
            echo "The same";
        } else {
            echo 'Not the same';
        }
    }

    function exercise2(int $integer=50) {
        if ($integer >= 1 && $integer <= 100) {
            echo "in the range of 1 and 100";
        } else {
            echo 'Not in the range of 1 and 100';
        }
    }

    function exercise3(string $string='Hello') {
        if ($string == 'Hello') {
            echo $string . " World";
        } else {
            echo $string . " is not Hello";
        }
    }

    function exercise4(int $value=0) {
        if ($value > 0) {
            echo "The value is above 0";
        } else if ($value < 0) {
            echo "The value is below 0";
        } else if ($value == 0) {
            echo "The value is 0";
        }
    }

    function exercise5(int $variable=50, int $y=0, int $z=100) {
        if ($variable >= $y && $variable <= $z) {
            echo "Correct! In the range of {$y} and {$z}";
        } else {
            echo "Not in the range of {$y} and {$z}";
        }
    }

    function exercise6(string $string="MU6818") {
        switch ($string) {
            case "MU6818":
                echo "It's my car!";
                break;
            default:
                echo "It's not my car!";
                break;
        }
    }

    function exercise7(int $number=10) {
        switch ($number) {
            case $number<50:
                echo "low";
                break;
            case $number<100:
                echo "medium";
                break;
            case $number>=100:
                echo "high";
                break;
        }
    }

    //Uncomment the exercise to test, add params to func to avoid default values.
    //exercise1();
    //exercise2();
    //exercise3();
    //exercise4();
    //exercise5();
    //exercise6("JX2546");
    //exercise7();