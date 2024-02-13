<?php

require_once './SimpleEmployer.php';
require_once './Employee.php';
require_once './PrimeMinister.php';

final class President extends SimpleEmployer implements Employee
{
    const PRESIDENT_SALARY = 80000;

    public function __construct()
    {
        $this->employees = [ new PrimeMinister() ];
    }

    public function getSalary(): int
    {
        return self::PRESIDENT_SALARY;
    }

    public function getBudget()
    {
        $salary = self::PRESIDENT_SALARY;

        foreach ($this->getEmployees() as $employee)
        {
            $salary += $employee->getSalary();
        }

        return $salary;
    }
}
