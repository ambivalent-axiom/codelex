<?php
//todo print the largest number
function exercise1(): int {
    $number1 = (int) readline("Input the 1st number: ");
    $number2 = (int) readline("Input the 2nd number: ");
    $number3 = (int) readline("Input the 3rd number: ");

    if ($number1 > $number2) {
        $biggest = $number1;
    } else {
        $biggest = $number2;
    }
    if ($biggest < $number3) {
        $biggest = $number3;
    }
    return $biggest;
}
//echo exercise1();
//todo print if number is positive or negative
function exercise2(): string {
    $number = (int) readline("Enter the number.: ");
    if ($number < 0) {
        return "Negative";
    } elseif ($number === 0) {
        return "Zero";
    } else {
        return "Positive";
    }
}
//echo exercise2();
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
//echo exercise3();
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
//echo exercise4();
function phoneKeyPad(): array {
    $mapping = [
        2 => ['a', 'b', 'c'],
        3 => ['d', 'e', 'f'],
        4 => ['g', 'h', 'i'],
        5 => ['j', 'k', 'l'],
        6 => ['m', 'n', 'o'],
        7 => ['p', 'q', 'r', 's'],
        8 => ['t', 'u', 'v'],
        9 => ['w', 'x', 'y', 'z']
    ];
    $string = strtolower(readline("Enter the string: "));
    $digits = [];
    //best solution I came up with for this task, but does not involve much conditioning
//    foreach (str_split($string) as $letter) {
//        for ($i = 2; $i <= count($mapping) + 1; $i++) {
//            if (in_array($letter, $mapping[$i])) {
//                for ($j = 0; $j <= array_search($letter, $mapping[$i]); $j++) {
//                    array_push($digits, $i);
//                }
//            }
//        }
//    }

        // NESTED IFS: only cases up to digit 3 covered as an example, since method is redundant
//    foreach (str_split($string) as $letter) {
//        if (in_array($letter, ["a", "b", "c"])) {
//            if ($letter === "a") {
//                array_push($digits, 2);
//            } elseif ($letter === "b") {
//                array_push($digits, 2, 2);
//            } elseif ($letter === "c") {
//                array_push($digits, 2, 2, 2);
//            }
//        } elseif (in_array($letter, ["d", "e", "f"])) {
//            if ($letter === "d") {
//                array_push($digits, 3);
//            } elseif ($letter === "e") {\
//                array_push($digits, 3, 3);
//            } elseif ($letter === "f") {
//                array_push($digits, 3, 3, 3);
//            }
//        }
//    }

    //case statement version, only 2 and 3 covered due to redundancy.
//    foreach (str_split($string) as $letter) {
//
//        switch ($letter) {
//            case (in_array($letter, $mapping[2])):
//                switch ($letter) {
//                    case 'a':
//                        array_push($digits, 2);
//                        break;
//                    case 'b':
//                        array_push($digits, 2, 2);
//                        break;
//                    case 'c':
//                        array_push($digits, 2, 2, 2);
//                        break;
//                }
//            break;
//
//            case (in_array($letter, $mapping[3])):
//                switch ($letter) {
//                    case ('d'):
//                        array_push($digits, 3);
//                        break;
//                    case ('e'):
//                        array_push($digits, 3, 3);
//                        break;
//                    case ('f'):
//                        array_push($digits, 3, 3, 3);
//                        break;
//                }
//            break;
//        }
//    }
    return $digits;
}

