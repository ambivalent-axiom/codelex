<?php

    $person = [
        "name" => "John",
        "surname" => "Doe",
        "age" => 25
    ];
    $persons = [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 25
        ],
        [
            "name" => "Anna",
            "surname" => "Karenina",
            "age" => 30
        ],
        [
            "name" => "Maria",
            "surname" => "Cope",
            "age" => 15
        ]
    ];
    $fruits = [
        'first'=>[
            'apple'=>2,
            'orange'=>1,
            'banana'=>3,
            'pineapple'=>11,
        ]
    ];
    $shippingCosts = [
        'under10kg'=>1,
        'over10kg'=>2
    ];
    $exercise6 = [1,2,3,4.15,"5"];


    function exercise1(string $string): string {
        return $string . "codelex";
    }
    //echo exercise1("code ");
    function exercise2(int $a, int $b): int {
        return $a * $b;
    }
    //echo exercise2(10, 5);
    function exercise3(array $person): string {
        if ($person["age"] >= 18) {
            return $person["name"] . " " . $person["surname"] . " age 18 or above.\n";
        }
        return $person["name"] . " " . $person["surname"] . " is under 18 years.\n";
    }
    //echo exercise3($person); //exercise3
    //    foreach ($persons as $person) { //exercise4
    //        echo exercise3($person);
    //    }
    function exercise5(int $fruit, array $shippingCosts): int {
        if ($fruit > 10) {
            return $shippingCosts['over10kg'];
        }
        return $shippingCosts['under10kg'];
    }
    //    foreach ($fruits['first'] as $fruit) {
    //        echo "Fruit weight: " . $fruit . " | Shipping cost: " . exercise5($fruit, $shippingCosts) . "\n";
    //    }
    function exercise6(int $value): int {
        return $value * 2;
    }
//    for($i=0; $i<=count($exercise6)-1; $i++) {
//        if (is_int($exercise6[$i])) {
//            echo exercise6($exercise6[$i]) . "\n";
//        } else {
//            echo $exercise6[$i] . "\n";
//        }
//    }







