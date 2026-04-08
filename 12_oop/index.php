<?php

// What is class and instance
class Person  {
    public $name;
    public $surname;
    private $age;
}

// Create instance of Person
$p = new Person();
$p->name = 'Arun';
$p->surname = 'Kumar';
echo "<pre>";
var_dump($p);
echo "</pre>";

echo $p->name . "<br>";
echo $p->surname . "<br>";

// Employee.php

require_once "employee.php";

$e = new Employee("Bhupendra","Sharma");
$e->setemp_id(23561);
echo "<pre>";
var_dump($e);
echo "</pre>";
echo $e->getemp_id();

$e2 = new Employee("Ajay","Singh");
echo "<pre>";
var_dump($e2);
echo "</pre>";
echo Employee::$counter. "<br>" ;
echo Employee::getCounter();
