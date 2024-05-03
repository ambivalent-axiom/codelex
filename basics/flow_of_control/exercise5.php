<?php
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
        foreach (str_split($string) as $letter) {
            for ($i = 2; $i <= count($mapping) + 1; $i++) {
                if (in_array($letter, $mapping[$i])) {
                    for ($j = 0; $j <= array_search($letter, $mapping[$i]); $j++) {
                        array_push($digits, $i);
                    }
                    array_push($digits, " ");
                }
            }
        }

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
    foreach (phoneKeyPad() as $string) {
        echo $string;
    }