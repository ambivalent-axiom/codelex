<?php
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
    echo $employee1->getSalary() . "\n";
    echo $employee2->getSalary() . "\n";
    echo $employee3->getSalary() . "\n";