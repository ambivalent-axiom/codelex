<?php
	function calcTwoInts(int $first, int $second) {
		if ($first == 15 || $second == 15) {
			return true;
		} else if ($first + $second == 15) {
			return true;
		} else if ($first - $second == 15) {
			return true;
		} else {
			return false;
		}
	}
	function checkOddEven(int $number) {
		if ($number % 2 == 0) {
			echo "Even number!";
		} else {
			echo "Odd number!";
		}
		echo "\nBye!";
	}
	function sumOneToHundred() {
		$array = [];
		for ($i=1; $i<=100; $i++) {
			array_push($array, $i);
		}

		echo "The sum of " . min($array) . " to " .  max($array) . " is " . array_sum($array) . "\n";
		echo "The average is " . array_sum($array)/max($array) . "\n";	
	}
	function factorial($n) {
		$result = 1;
		for ($i = 1; $i <= $n; $i++) {
			$result *= $i;
		}
		echo $result;
	}
	function guessTheNumber() {
		$result = rand(1, 100);
		$gameOn = true;
		while($gameOn) {
			$guess = readline("\nGuess the number from 1 to 100: ");
			switch($guess) {
			case $guess == $result:
				echo "\nYou guessed it! What are the odds!?";
				$gameOn = false;
				break;
			case $guess < $result:
				echo "\nYou are too low, try higher!\n";
				break;
			case $guess > $result:
				echo "\nYou are too high, try lower!\n";
				break;
			case $guess == 0:
				echo "\nToo bad You've gave up. I was thinking of {$result}.\n";
				$gameOn = false;
				break;
			}
		}
	}
    function cozaLozaWoza() {
        $line = [];
        for($i=1; $i<=110; $i++) {
            if ($i % 3 == 0) {
                array_push($line, 'Coza');
            } elseif ($i % 5 == 0) {
                array_push($line, 'Loza');
            } elseif ($i % 7 == 0) {
                array_push($line, 'Woza');
            } else {
                array_push($line, $i);
            }

            if(count($line)==11) {
                foreach($line as $string) {
                    echo $string . " ";
                }
                echo "\n";
                $line = [];
            }
        }
    }
    function gravity(int $seconds, int $initVel = 0, int $initPos = 0) {
        $a = (float) -9.81;
        $x = (0.5 * ($a * ($seconds ** 2))) + ($initVel * $seconds) + $initPos;
        return $x;
    }
    //exercise 8
    class employee {
        private $name;
        private $basePay;
        private $workedHours;
        public function __construct(string $name, float $basePay, int $workedHours) {
            $this->name = $name;
            $this->basePay = $basePay;
            $this->workedHours = $workedHours;
        }
        
        public function calculateSalary() {
            if ($this->workedHours > 60) {
                return "Error! Check worked hours value: " . $this->workedHours;
            }

            $overhours = $this->workedHours - 40;
            if ($overhours < 0) {
                $overhours = 0;
            }

            if ($overhours == 0) {
                $salary = $this->workedHours * $this->basePay;
            }
            if ($overhours > 0) {
                $salary = ($overhours * ($this->basePay*1.5)) + ($this->workedHours - $overhours) * $this->basePay;
            }
            return $salary;
        }
        public function getSalary(): string {
            if (!is_numeric($this->calculateSalary())) {
                return $this->calculateSalary();
            }
            return $this->name . " Total pay: " . $this->calculateSalary();
        }
    }
    $employee1 = new employee('John', 7.50, 35);
    $employee2 = new employee('Signe', 8.20, 47);
    $employee3 = new employee('Zane', 10, 73);
    //echo $employee1->getSalary();
    //echo $employee2->getSalary();
    //echo $employee3->getSalary();
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
    //echo bmi(59, 179);
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
    function geometry() {
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
    //geometry();