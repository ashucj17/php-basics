<?php
// Associative arrays: Array with key & value pair
// ============================================

// Create an associative array

$employee = [
    'id'=> 23561,
    'name'=> "Ashish",
    'email'=> "ashish.kumar01@amazon.com"
];
echo "<pre>";
var_dump($employee);
echo "</pre>";
// Get element by key

echo $employee['name'] . "<br>";

// Set element by key

$employee['address']  = "Kanpur";
echo "<pre>";
var_dump($employee);
echo "</pre>";

// Null coalescing assignment operator. Since PHP 7.4

// $employee['contact no'] ??= "Unknown";
$employee['contact no'] = $employee["contact no"] ??= "Not Available";
echo "<pre>";
var_dump($employee);
echo "</pre>";

// Check if array has specific key

echo "<pre>";
var_dump(isset($employee['name']));
echo "</pre>";

// Print the keys of the array

echo "array_keys() function is used to print the values of an array" . "<br>";
echo "<pre>";
var_dump(array_keys($employee));
echo "</pre>";

// Print the values of the array
echo "array_values() is used to print the values of an array" . "<br>";
echo "<pre>";
var_dump(array_values($employee));
echo "</pre>";

// Sorting associative arrays by values, by keys
echo "ksort() function is used to sort key of an associative array" . "<br>";
ksort($employee);
echo "<pre>";
var_dump($employee);
echo "</pre>";

echo "asort() function is used to sort the value of an associative array" . "<br>";
asort($employee);
echo "<pre>";
var_dump(array_values($employee));
echo "</pre>";

// Two dimensional arrays

$employees_details = [
    ['name' => "Ashish", 'email' => "ashish@testmail.com"],
    ['name' => "deepa", 'email' => "deepa@testmail.com"],
];

echo "<pre>";
var_dump($employees_details);
echo "</pre>";


?>