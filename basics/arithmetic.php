
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
	guessTheNumber();
