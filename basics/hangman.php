<?php
    $words = [
        "random",
        "letter",
        "program",
        "display",
        "guess"
    ];

    $maxTries = 6;
    $word = $words[rand(0, count($words) - 1)];
    $letterArray = str_split($word);
    $guessArray = array_fill(0, count($letterArray), "_");
    $usedLetters = [];
    $gameOn = true;

    function printStats(int $maxTries, array $guessArray, array $usedLetters): void
    {
        echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-\n";
        echo "Lives:  $maxTries" . "\n";
        echo "Word:   ";
        foreach ($guessArray as $word) {
            echo "$word ";
        }
        echo "\n";
        echo "Misses: ";
        foreach ($usedLetters as $letter) {
            echo "$letter ";
        }
        echo "\n";
    }
    function playAgain(): bool {
        global $words;
        global $maxTries;
        global $guessArray;
        global $usedLetters;
        while (true) {
            $prompt = strtolower(readline("Play (a)gain or (q)uit?: "));
            if ($prompt != 'a' || $prompt != 'q') {
                break;
            }
        }
        if ($prompt == 'a') {
            $maxTries = 6;
            $word = $words[rand(0, count($words) - 1)];
            $letterArray = str_split($word);
            $guessArray = array_fill(0, count($letterArray), "_");
            $usedLetters = [];
            return true;
        }
        return false;
    }

    while($gameOn) {
        printStats($maxTries, $guessArray, $usedLetters);
        if($maxTries < 0) {
            echo "You are Hanged!\n";
            $gameOn = playAgain();
            if(!$gameOn) {
                exit;
            }
            continue;
        }
        if($guessArray === str_split($word)) {
            echo "YOU GOT IT!\n";
            $gameOn = playAgain();
            if(!$gameOn) {
                exit;
            }
            continue;
        }
        $guess = (string) readline("Guess : ")[0];
        if(!in_array($guess, str_split($word))) {
            array_push($usedLetters, $guess);
            $maxTries = $maxTries - 1;
        }
        foreach ($letterArray as $letter) {
            if ($guess == $letter) {
                $position = array_search($guess, $letterArray);
                unset($letterArray[$position]);
                $guessArray[$position] = "$guess";
            }
        }
        $usedLetters = array_unique($usedLetters);
    }



