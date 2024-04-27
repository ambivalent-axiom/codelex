<?php
    $guns = [
        [
            'name'=>'AK47',
            'license'=>'A',
            'price'=>100
        ],
        [
            'name'=>'Makarov 8mm',
            'license'=>'C',
            'price'=>30
        ],
        [
            'name'=>'Mosquito',
            'license'=>'Z',
            'price'=>5
        ]
    ];
    class Person {
        public string $name;
        public array $validLicenses;
        public int $cash;
        public function __construct(string $name, array $validLicenses, int $cash) {
            $this->name = $name;
            $this->validLicenses = $validLicenses;
            $this->cash = $cash;
        }
    }
    $customer = new Person('John', ['C', 'Z'], 25);
    function whatCanIBuy(array $guns, Person $person): string
    {
        $canBuy = 'Nothing';
        foreach ($guns as $gun) {
            if (in_array($gun['license'], $person->validLicenses) && $person->cash >= $gun['price']) {
                $canBuy = $gun['name'] . "\n";
            }
        }
        return $canBuy;
    }
    echo whatCanIBuy($guns, $customer);

