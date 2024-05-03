<?php
    function sumOneToHundred(): void {
        $array = [];
        for ($i=1; $i<=100; $i++) {
            array_push($array, $i);
        }

        echo "The sum of " . min($array) . " to " .  max($array) . " is " . array_sum($array) . "\n";
        echo "The average is " . array_sum($array)/max($array) . "\n";
    }
    sumOneToHundred();