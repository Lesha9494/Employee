<?php

require 'vendor/autoload.php';

use Alexey\Employee\FullTimeEmployee;
use Alexey\Employee\PartTimeEmployee;

$employees = [
    new FullTimeEmployee("Алексей", "Руководитель команды", 90000),
    new PartTimeEmployee("Иван", "Младший разработчик", 500, 100),
    new PartTimeEmployee("Анастасия", "Менеджер", 300, 90),
    new FullTimeEmployee("Егор", "Специалист по кадрам", 60000),
];

foreach ($employees as $employee) {
    echo $employee->getDetails() . PHP_EOL;
    echo "Зарплата: " . $employee->calculateSalary() . PHP_EOL;
}
