<?php

namespace Alexey\Employee;

class FullTimeEmployee extends Employee
{
    private float $fixedSalary;

    public function __construct(string $name, string $position, float $fixedSalary)
    {
        parent::__construct($name, $position);
        $this->fixedSalary = $fixedSalary;
    }

    public function calculateSalary(): float
    {
        return $this->fixedSalary;
    }
}
