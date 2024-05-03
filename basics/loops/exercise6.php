<?php
    class AsciiFigure {
        const ROWS = 7;

        static function drawFigure(): void {
            $hight = self::ROWS;
            for ($i = 0; $i < $hight; $i++) {
                $left = str_repeat("////", $hight - ($i+1));
                $middle = str_repeat("****", $i);
                $right = str_repeat("\\\\\\\\", $hight - ($i+1));
                echo  $left . $middle . $middle . $right . "\n";
            }
        }
    }
    AsciiFigure::drawFigure();