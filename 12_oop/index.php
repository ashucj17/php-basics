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

// constructor function

class Employee {
    public $employee_name;
    public $employee_surname;
    private $employee_id;
    public static $counter = 0;

    public function __construct($employee_name,$employee_surname)
    {
    //    echo $employee_name . ' ' . $employee_surname;
    // echo "$this keyword target the inscance of the current object" . '<br>';
       $this->employee_name = $employee_name;
       $this->employee_surname = $employee_surname;
       self::$counter++;
    }
    // Using setter and getter
    public function setemp_id($employee_id)
    {
        $this->employee_id = $employee_id;
    }

    public function getemp_id()
    {
        return $this->employee_id;
    }

    public static function getCounter()
    {
        return self::$counter;
    }
}

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
