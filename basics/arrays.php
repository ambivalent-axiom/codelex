<?php

//$a = [1, 2, 3];
//echo array_sum($a);


//$person = [
//    "name" => "John",
//    "surname" => "Doe",
//    "age" => 50
//];
//
//foreach ($person as $key => $value) {
//    var_dump($value);
//}

//$person = new stdClass();
//$person->name = "John";
//$person->surname = "Doe";
//$person->age = 50;
//
//foreach ($person as $key => $value) {
//    var_dump($value);
//}

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


//echo $items[0][1]['name'] . " " . $items[0][1]['surname'] . " " . $items[0][1]['age'];

echo $items[0][0]['name'] . " & " . $items[0][1]['name'] . " " . $items[0][1]['surname'] . "'s";