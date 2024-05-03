<?php
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
    echo indexDots();