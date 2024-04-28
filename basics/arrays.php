<?php
    $items = [
        [
            [
                "name" => "John",
                "surname" => "Doe",
                "age" => 50
            ],
            [
                "name" => "Jane",
                "surname" => "Doe",
                "age" => 41
            ]
        ]
    ];
    function exercise1() {
        $a = [1, 2, 3];
        echo array_sum($a);
    }
    function exercise2() {
        $person = [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ];
        foreach ($person as $key => $value) {
            var_dump($value);
        }
    }
    function exercise3() {
        $person = new stdClass();
        $person->name = "John";
        $person->surname = "Doe";
        $person->age = 50;

        foreach ($person as $key => $value) {
            var_dump($value);
        }
    }
    function exercise4() {
        global $items;
        echo $items[0][1]['name'] . " " . $items[0][1]['surname'] . " " . $items[0][1]['age'];
    }
    function exercise5() {
        global $items;
        echo $items[0][0]['name'] . " & " . $items[0][1]['name'] . " " . $items[0][1]['surname'] . "'s";
    }

    //Uncomment the exercise to test, add params to func to avoid default values.
    //exercise1();
    //exercise2();
    //exercise3();
    //exercise4();
    //exercise5();

    //exercises from php-basics directory of syllabus
    //exercise 1
    $numbers = [
        1789, 2035, 1899, 1456, 2013,
        1458, 2458, 1254, 1472, 2365,
        1456, 2165, 1457, 2456
    ];
    $words = [
        "Java",
        "Python",
        "PHP",
        "C#",
        "C Programming",
        "C++"
    ];
    function originalArray(array $array): void
    {
        foreach ($array as $element) {
            echo $element . " ";
        }
        echo "\n";
    }
    function sortedArray(array $array): void
    {
        sort($array);
        foreach ($array as $element) {
            echo $element . " ";
        }
        echo "\n";
    }
    //exercise 2
    $numbers = [20, 30, 25, 35, -16, 60, -100];
    $avg_numbers = array_sum($numbers) / count($numbers);
    //exercise 3
    function inArray(): void {
        $numbers = [
            1789, 2035, 1899, 1456, 2013,
            1458, 2458, 1254, 1472, 2365,
            1456, 2265, 1457, 2456
        ];
        $value = (int) readline("Enter the value to search for: ");
        if (in_array($value, $numbers)) {
            echo $value . " is in Array";
        } else {
            echo $value . " is NOT in Array";
        }
    }
    //exercise 4
    function createTwoArrays()
    {
        $numbers1 = [];
        $numbers2 = [];
        for ($i = 0; $i < 10; $i++) {
            $new_element = random_int(1, 100);
            array_push($numbers1, $new_element);
        }
        $numbers2 = $numbers1;
        array_pop($numbers1);
        array_push($numbers1, -7);
        echo "\nArray 1: ";
        foreach ($numbers1 as $number) {
            echo $number . " ";
        }
        echo "\nArray 2: ";
        foreach ($numbers2 as $number) {
            echo $number . " ";
        }

    }