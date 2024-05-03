<?php
    function exercise4(): string//void
    {
        while(true) {
            $number = (int) readline("Enter the number.: ");
            if ($number > 0) {
                break;
            }
        }
        if ($number > 0 && $number < 6) {
            if ($number == 1) {
                return "Monday";
            } elseif ($number == 2) {
                return "Tuesday";
            } elseif ($number == 3) {
                return "Wednesday";
            } elseif ($number == 4) {
                return "Thursday";
            } elseif ($number == 5) {
                return "Friday";
            } elseif ($number == 6) {
                return "Saturday";
            }
        }
        return "Not a valid number";
    //    switch ($number) {
    //        case 1:
    //            echo "Monday";
    //            break;
    //        case 2:
    //            echo "Tuesday";
    //            break;
    //        case 3:
    //            echo "Wednesday";
    //            break;
    //        case 4:
    //            echo "Thursday";
    //            break;
    //        case 5:
    //            echo "Friday";
    //            break;
    //        case 6:
    //            echo "Saturday";
    //            break;
    //        default:
    //            echo "Not a valid day";
    //            break;
    //    }
    }
    echo exercise4();