<?php
    function multiplyTimes($n): int {
        $result = $n;
        for ($i = 1; $i <= $n; $i++) {
            $result = $result * $n;
        }
        return $result;
    }
    echo multiplyTimes(3);