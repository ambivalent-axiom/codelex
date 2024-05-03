<?php
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
    Piglet::game();