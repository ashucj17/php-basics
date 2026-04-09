<?php

class Employee {
    public string $employee_name;
    public string $employee_surname;
    protected int $employee_id;
    #the public property only belong to class not individual objects.
    public static int $counter = 0;

    // constructor function

    public function __construct($employee_name,$employee_surname)
    {
    //    echo $employee_name . ' ' . $employee_surname;
    // echo "$this keyword target the instance of the current object" . '<br>';
       $this->employee_name = $employee_name;
       $this->employee_surname = $employee_surname;
    // self:: static class level members
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