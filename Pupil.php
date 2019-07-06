<?php

class Pupil
{
    private $name;
    private $age;
    private $class;
    function __construct($name, $age, $class)
    {
        $this->name = $name;
        $this->age = (int)$age;
        $this->class = (int)$class;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getClass()
    {
        return $this->class;
    }


}