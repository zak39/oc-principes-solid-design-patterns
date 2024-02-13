<?php

require_once 'EducationMinister.php';
require_once 'President.php';
require_once 'PrimeMinister.php';
require_once 'Teacher.php';

$president = new President();
$primeMinister = new PrimeMinister();
$educationMinister = new EducationMinister();

$educationMinister->addEmployee(new Teacher());
$educationMinister->addEmployee(new Teacher());
$educationMinister->addEmployee(new Teacher());
$educationMinister->addEmployee(new Teacher());
$educationMinister->addEmployee(new Teacher());

$educationBudget = $educationMinister->getBudget();
$presidentBudget = $president->getBudget();
$primeMinisterBudget = $primeMinister->getBudget();

var_dump([
    'budgets' => 
    [
        'education_minister' => $educationBudget,
        'prime_minister' => $educationBudget,
        'president' => $presidentBudget,
    ]
]);
