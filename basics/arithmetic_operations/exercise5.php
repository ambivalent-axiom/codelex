<?php
    function guessTheNumber(): void {
        $result = rand(1, 100);
        $gameOn = true;
        while($gameOn) {
            $guess = readline("\nGuess the number from 1 to 100: ");
            switch($guess) {
                case $guess == $result:
                    echo "\nYou guessed it! What are the odds!?";
                    $gameOn = false;
                    break;
                case $guess < $result:
                    echo "\nYou are too low, try higher!\n";
                    break;
                case $guess > $result:
                    echo "\nYou are too high, try lower!\n";
                    break;
                case $guess == 0:
                    echo "\nToo bad You've gave up. I was thinking of {$result}.\n";
                    $gameOn = false;
                    break;
            }
        }
    }
    guessTheNumber();