<?php

require_once './Employee.php';

interface Employer
{
    public function getEmployees();

    public function addEmployee(Employee $employee);

    public function removeEmployee(Employee $employee);
}