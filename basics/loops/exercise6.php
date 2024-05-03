<?php
    class AsciiFigure {
        const ROWS = 8;
        static function drawFigure(): void {
            for ($i = 0; $i < self::ROWS; $i++) {
                $left = str_repeat("////", self::ROWS - ($i+1));
                $middle = str_repeat("****", $i);
                $right = str_repeat("\\\\\\\\", self::ROWS - ($i+1));
                echo  $left . $middle . $middle . $right . "\n";
            }
        }
    }
    AsciiFigure::drawFigure();