<?php
    class geometry {
        static function circleArea(): float
        {
            $prompt = "Enter the radius: ";
            $r = self::validatedInput($prompt);
            return M_PI * pow($r, 2);
        }
        static function rectangleArea(): float
        {
            $prompt = "Enter the length: ";
            $length = self::validatedInput($prompt);
            $prompt = "Enter the width: ";
            $width = self::validatedInput($prompt);
            return $length * $width;
        }
        static function triangleArea(): float
        {
            $prompt = "Enter the length of triangle base: ";
            $base = self::validatedInput($prompt);
            $prompt = "Enter the triangle height: ";
            $height = self::validatedInput($prompt);
            return 0.5 * $base * $height;
        }
        static function validatedInput($prompt): float
        {
            while(true) {
                $value = (float) readline($prompt);
                if (is_numeric($value) && $value > 0) {
                    return $value;
                } else {
                    echo "Wrong input! Value must be a positive float!\n";
                }
            }
        }

    }
    function geometry(): void {
        echo "Geometry Calculator\n";
        echo "1. Calculate the Area of a Circle\n";
        echo "2. Calculate the Area of a Rectangle\n";
        echo "3. Calculate the Area of a Triangle\n";
        echo "4. Quit\n";
        while (true) { //input validation
            $choice = (int) readline("Enter your choice (1-4) : ");
            if ($choice < 1 || $choice > 4) {
                echo "Input must be within the given range 1-4!\n";
                continue;
            }
            break;
        }

        switch ($choice) {
            case 1:
                $result = geometry::circleArea();
                break;
            case 2:
                $result = geometry::rectangleArea();
                break;
            case 3:
                $result = geometry::triangleArea();
                break;
            case 4:
                exit;
        }
        echo "Calculated area: " . $result . "\n";
    }
    geometry();