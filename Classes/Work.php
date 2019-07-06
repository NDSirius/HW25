<?php

namespace homework25\Classes;

class Work {
    private $name;
    private $salary;
    private $age;
    function __construct($name, $salary, $age) {
        $this->name = $name;
        $this->salary = (int)$salary;
        $this->age = (int)$age;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getSalary()
    {
        return $this->salary;
    }
    public function getAge()
    {
        return $this->age;
    }

}