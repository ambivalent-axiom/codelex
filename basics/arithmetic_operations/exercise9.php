<?php
    function bmi (int $weight, int $height): string {
        $weight = $weight * 2.20462;
        $height = $height * 0.393701;
        $bmi = ($weight * 703) / ($height ** 2);
        if ($bmi > 25) {
            return "Overweight";
        } elseif ($bmi < 18.50) {
            return "Underweight";
        } else {
            return "Optimal weight";
        }
    }
    echo bmi(59, 179);