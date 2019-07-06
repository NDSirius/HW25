<?php

spl_autoload_register(function ($class) {
    require_once $class . '.php';
});

$pupil = new Pupil(Alex,12,6);
echo 'Hello. This is pupil ' . $pupil->getName() . "<br>";
echo 'He is ' . $pupil->getAge() . 'years old' . "<br>";
echo 'He is studying in grade' . $pupil->getClass() . "<br>";
