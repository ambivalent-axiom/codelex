<?php
    class RollTwoDice {
        static function prompt(): int {
            while (true) {
                $integer = (int) readline("Desired sum: ");
                if ($integer > 1 && $integer < 13) {
                    break;
                }
                echo "Input must be a valid integer between 2 and 12!\n";
            }
            return $integer;
        }
        static function roll(): int {
            $dice1 = rand(1, 6);
            $dice2 = rand(1, 6);
            echo "$dice1 and $dice2 = ";
            return $dice1 + $dice2;
        }
        static function game(): void {
            $desired = self::prompt();
            while(true) {
                $result = self::roll();
                echo "$result\n";
                if ($desired == $result) {
                    exit;
                }
            }
        }
    }
    RollTwoDice::game();