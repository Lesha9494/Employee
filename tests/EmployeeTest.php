<?php

use PHPUnit\Framework\TestCase;
use Alexey\Employee\FullTimeEmployee;
use Alexey\Employee\PartTimeEmployee;

class EmployeeTest extends TestCase
{
    public function testFullTimeEmployeeSalary()
    {
        $employee = new FullTimeEmployee("Алексей", "Директор", 100000);
        $this->assertEquals(100000, $employee->calculateSalary());
    }

    public function testPartTimeEmployeeZeroHours()
    {
        $employee = new PartTimeEmployee("Никита", "Стажёр", 20, 0);
        $salary = $employee->calculateSalary();
        $this->assertIsFloat($salary);
    }
}
