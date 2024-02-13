<?php

require_once './Employee.php';
require_once './SimpleEmployer.php';

final class Teacher implements Employee
{
    const TEACHER_SALARY = 30000;

    public function getSalary(): int
    {
        return self::TEACHER_SALARY;
    }
}