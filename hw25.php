<?php
require_once 'vendor/autoload.php';

$worker = new homework25\Classes\Work(Alex,1000,22);
echo 'Hello. This is student ' . $worker->getName() . "<br>";
echo 'He\'s age is ' . $worker->getAge() . "<br>";
echo 'He\'s salary is ' . $worker->getSalary(). "<br>";
$student = new SuperProject\Stud(Alex,1000,22);
echo 'Hello. This is student ' . $student->getName() . "<br>";
echo 'He\'s age is ' . $student->getAge() . "<br>";
echo 'He\'s salary is ' . $student->getRevenue(). "<br>";