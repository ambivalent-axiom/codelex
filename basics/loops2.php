<?php
    function naturalNumbers(): void {
        echo "The first 10 natural numbers are: ";
        for ($i = 1; $i <= 10; $i++) {
            echo "$i ";
        }
    }
    //naturalNumbers();
    function multiplyTimes($n): int {
        $result = $n;
        for ($i = 1; $i <= $n; $i++) {
            $result = $result * $n;
        }
        return $result;
    }
    //echo multiplyTimes(3);
    function indexDots(): string {
        $leftPart = readline("Enter first word: ");
        $rightPart = readline("Enter second word: ");
        $totalLen = 30;
        $inputLen = strlen($leftPart . $rightPart);
        $dotsLen = $totalLen - $inputLen;
        $dots = str_repeat(".", $dotsLen);

//        echo "$leftPart";
//        for ($i = 0; $i < $dotsLen; $i++) {
//            echo ".";
//        }
//        echo "$rightPart\n";

        return $leftPart . $dots . $rightPart;
    }
    //echo indexDots();
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
    //FizzBuzz::doFizzBuzz();
    class Piglet {
        static function welcome(): string {
            return "Welcome to the piglet.\n";
        }
        static function roll(): int {
            return rand(1, 6);
        }
        static function playAgain(): bool {
            $prompt = (string)readline("Roll again? y/n: ");
            if ($prompt === "y") {
                return true;
            } else {
                return false;
            }
        }
        static function game(): void {
            $score = 0;
            echo self::welcome();
            $gameOn = true;
            while($gameOn) {
                $roll = self::roll();
                echo "You rolled a $roll!\n";
                if ($roll == 1) {
                    $score = 0;
                    echo "Bust! Score: $score\n";
                    $gameOn = self::playAgain();
                    if($gameOn) {
                        continue;
                    } else {
                        echo "Winnings: $score\n";
                        exit;
                    }
                } else {
                    $score += $roll;
                    echo "Total score: $score\n";
                    $gameOn = self::playAgain();
                    if($gameOn) {
                        continue;
                    } else {
                        echo "Winnings: $score\n";
                        exit;
                    }
                }
            }
        }
    }
    //Piglet::game();
    class AsciiFigure {
        const ROWS = 7;

        static function drawFigure(): void {
            $hight = self::ROWS;
            for ($i = 0; $i < $hight; $i++) {
                $left = str_repeat("////", $hight - ($i+1));
                $middle = str_repeat("****", $i);
                $right = str_repeat("\\\\\\\\", $hight - ($i+1));
                echo  $left . $middle . $middle . $right . "\n";
            }
        }
    }
    //AsciiFigure::drawFigure();
    class RollTwoDice {
        static function prompt(): int {
            while (true) {
                $integer = (int) readline("Desired sum: ");
                if ($integer > 0) {
                    break;
                }
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
    //RollTwoDice::game();
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
    //NumberSquare::matrix();