<?php
    class NumberSquare {
        static function prompt(string $prompt): int {
            while (true) {
                $integer = (int) readline($prompt);
                if ($integer > 0) {
                    break;
                }
            }
            return $integer;
        }
        static function matrix(): void {
            $min = self::prompt('Min?: ');
            $max = self::prompt('Max?: ');

            for ($i = $min; $i <= $max; $i++) {
                $offset = $max - $i;
                for ($j = $min; $j <= $offset + 1; $j++) {
                    $a = $j + $i - 1;
                    echo "$a   ";
                }
                for ($j = $min; $j <= $i - 1; $j++) {
                    echo "$j   ";
                }
                echo "\n";
            }
        }
    }
    NumberSquare::matrix();