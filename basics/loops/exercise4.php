<?php
    class FizzBuzz {
        static function prompt(): int {
            while (true) {
                $integer = (int) readline("Provide the integer of ceiling for fizzBuzz: ");
                if ($integer > 0) {
                    break;
                }
            }
            return $integer;
        }
        static function doFizzBuzz(): void {
            $n = self::prompt();
            for ($i = 1; $i < $n; $i++) {
                if ($i % 3 === 0 && $i % 5 === 0) {
                    echo "FizzBuzz ";
                } elseif ($i % 3 === 0) {
                    echo "Fizz ";
                } elseif ($i % 5 === 0) {
                    echo "Buzz ";
                } else {
                    echo "$i ";
                }
            }
        }
    }
    FizzBuzz::doFizzBuzz();