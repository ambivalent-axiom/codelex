<?php

$assets = [
    'rock' => [1, 'scissors', 'lizard'],
    'paper' => [2, 'rock', 'spock'],
    'scissors' => [3, 'paper', 'lizard'],
    'lizard' => [4, 'paper', 'spock'],
    'spock' => [5, 'rock', 'scissors']
];

echo $assets(array_key_first($assets));


string