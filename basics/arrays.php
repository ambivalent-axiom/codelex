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



