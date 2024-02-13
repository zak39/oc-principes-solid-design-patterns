<?php

require_once './Employee.php';
require_once './SimpleEmployer.php';
require_once './EducationMinister.php';

class PrimeMinister extends SimpleEmployer implements Employee
{
    const PRIME_MINISTER_SALARY = 10000;

    public function __construct()
    {
        $this->employees = [ new EducationMinister() ];
    }

    public function getSalary(): int
    {
        return self::PRIME_MINISTER_SALARY;
    }

    public function getBudget()
    {
        $salary = self::PRIME_MINISTER_SALARY;

        foreach ($this->getEmployees() as $employee)
        {
            $salary += $employee->getSalary();
        }

        return $salary;
    }
}