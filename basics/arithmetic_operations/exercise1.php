<?php
    function calcTwoInts(int $first, int $second): bool {
        if ($first == 15 || $second == 15) {
            return true;
        } else if ($first + $second == 15) {
            return true;
        } else if ($first - $second == 15) {
            return true;
        } else {
            return false;
        }
    }
    echo calcTwoInts(15, 15);