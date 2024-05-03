<?php
    function gravity(int $seconds, int $initVel = 0, int $initPos = 0): float {
        $a = -9.81;
        return (0.5 * ($a * ($seconds ** 2))) + ($initVel * $seconds) + $initPos;
    }
    echo gravity(10) . "m";