<?php
	$array = [];

	for($i=1;$i<=10;$i++){
		array_push($array,$i);
	}
	function exercise1() {
		global $array;
		foreach ($array as $key => $value) {
		    echo $value;
	}
	}
	function exercise2() {
		global $array;
		for($i=0;$i<count($array);$i++){
		    echo $array[$i];
		}
	}
	function exercise3() {
		$x = 1;
		while ($x <= 10) {
		    echo "codelex\n";
		    $x = $x + 1;
		}
	}
	function exercise4() {
		$array = [1,2,3,4,5,6,7,8,9];
		foreach ($array as $value) {
		    if ($value % 3 == 0) {
			echo "$value" . "\n";
		    }
		}
	}
	function exercise5() {
		$array_assoc = [
			[
				"name"=>"John",
				"surname"=>"Smith",
				"age"=>30,
				"birthday"=>"10.02.1995"
			],
			[
				"name"=>"Andrew",
				"surname"=>"Simons",
				"age"=>34,
				"birthday"=>"14.05.1995"
			],
			[
				"name"=>"Johanna",
				"surname"=>"Smithery",
				"age"=>18,
				"birthday"=>"10.02.2002"
			]
		];
		foreach ($array_assoc as $person) {
			echo "Name: " . $person['name'] . "\n" . 
				" Surname: " . $person['surname'] . "\n" .
				" Age: " . $person['age'] . "\n" .
				" Birthday: " . $person['birthday'] . "\n";
		}
	}
	//exercise1();
	//exercise2();
	//exercise3();
	//exercise4();
	exercise5();
