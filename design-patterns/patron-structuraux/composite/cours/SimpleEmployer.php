<?php

require_once './Employer.php';
require_once './Employee.php';

abstract class SimpleEmployer implements Employer
{
    protected $employees = [];

    public function getEmployees()
    {
        return $this->employees;
    }

    public function addEmployee(Employee $employee)
    {
        $this->employees[] = $employee;
    }

    public function removeEmployee(Employee $employee)
    {
        $index = array_search(
            $employee,
            $this->employees
        );
        
        unset($this->employees[$index]);

        $this->employees = array_values($this->employees);
    }

    abstract public function getBudget();
}
