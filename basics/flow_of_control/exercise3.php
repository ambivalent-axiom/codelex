<?php
    function exercise3(): int {
        while(true) {
            $number = (int) readline("Enter the number.: ");
            if ($number > 0) {
                break;
            }
        }
        //REALLY???!!!
    //    if ($number < 10) {
    //        return 1;
    //    } elseif ($number >= 10 && $number < 100) {
    //        return 2;
    //    } elseif ($number >= 100 && $number < 1000) {
    //        return 3;
    //    } elseif ($number >= 1000 && $number < 10000) {
    //        return 4;
    //    } elseif ($number >= 10000 && $number < 100000) {
    //        return 5;
    //    } elseif ($number >= 100000 && $number < 1000000) {
    //        return 6;
    //    } elseif ($number >= 1000000 && $number < 1000000000) {
    //        return 7;
    //    } elseif ($number >= 1000000000 && $number < 100000000000) {
    //        return 8;
    //    }
        return log10($number) + 1;
    }
    echo exercise3();