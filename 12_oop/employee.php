<?php

class Employee {
    public $employee_name;
    public $employee_surname;
    private $employee_id;
    public static $counter = 0;

    // constructor function

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
?>