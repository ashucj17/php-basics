<?php

require_once "Employee.php";

class Developer extends Employee
{
    public string $designation;

    public function __construct($employee_name, $employee_surname,$designation)
    {
        parent::__construct($employee_name, $employee_surname);
        $this->employee_id = 23561;
        $this->designation = $designation;
    }


}

?>