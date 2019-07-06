<?php
namespace SuperProject;

class Stud {
    private $name;
    private $revenue;
    private $age;
    function __construct($name, $revenue, $age) {
        $this->name = $name;
        $this->revenue = (int)$revenue;
        $this->age = (int)$age;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getRevenue()
    {
        return $this->revenue;
    }
    public function getAge()
    {
        return $this->age;
    }

}