<?php
    function factorial($n): void {
        $result = 1;
        for ($i = 1; $i <= $n; $i++) {
            $result *= $i;
        }
        echo $result;
    }
    factorial(4);