<?php

require_once './Employee.php';
require_once './SimpleEmployer.php';
require_once './Teacher.php';

class EducationMinister extends SimpleEmployer implements Employee
{
    const EDUCATION_MINISTER_SALARY = 100000;

    public function __construct()
    {
        $this->employees = [ new Teacher() ];
    }

    public function getSalary(): int
    {
        return self::EDUCATION_MINISTER_SALARY;
    }

    public function getBudget()
    {
        $salary = self::EDUCATION_MINISTER_SALARY;

        foreach ($this->getEmployees() as $employee)
        {
            $salary += $employee->getSalary();
        }

        return $salary;
    }
}