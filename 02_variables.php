<?php

// What is a variable
# In php variables are the container that holds the value.


// Variable types
# php is a dynamically typed language, it means there is no need to define its data type it will automaticall determines at the runtime.

/* Builtin types in php:
    1: int: holds the integer value.
    2: bool - boolean: holds either true(1) or false(0).
    3: null: it holds nothing or null.
    4: float: it holds the floating value.
    5: string: it holds the characters.
 */

// Declare variables

# In php the variable are declared using doller ($) symbol.

$name ="Ashish";
$age =30;
$salary = 125390.78;
$loggedIn = true;
$happy = null;


// Print the variables. Explain what is concatenation

# dot . is used for string concatenation

echo $name . "<br/>";
echo $age . "<br/>";
echo $salary . "<br>";
echo $loggedIn . "<br />";
echo $happy . "<br/>";


echo ("Name: " . $name . "<br/><br/>"); // parentheses are used to grouped multiple expressions or perform complex operations.
// Print types of the variables

# gettype() is used to konw the data type of a variable.

echo gettype($name) . "<br/>";
echo gettype($age) . "<br>/";
echo gettype($salary) . "<br/>";
echo gettype($loggedIn) . "<br/>";
echo gettype($happy) . "<br/>";

// Print the whole variable

# var_dump is a build-in fuction used for debugging purpose. It shows the value of the variable, variable data type, length of the variable(string, array)

var_dump($name);
var_dump($age);
var_dump($salary);
var_dump($loggedIn);
var_dump($happy);

var_dump($name, $age, $salary, $loggedIn, $happy);

// Change the value of the variable

$age = 29;
$loggedIn = "False";


// Print type of the variable

echo gettype($age). "<br>";
echo gettype($loggedIn). "<br>";

var_dump($name . "<br>", $age . "<br>", $salary . "<br>", $loggedIn . "<br>", $happy); // br inside var_dum converts the all the data types into string.

// to get the output in pre writtern formate, use <pre> tag

echo "<pre>";

var_dump($name, $age, $salary, $loggedIn, $happy);

echo "</pre>";


// Variable checking functions

/* is_string($name);
is_int($age);
is_float($salary);
is_bool($loggedIn);
is_null($happy);

these function returns true or false

*/
var_dump(is_string($name),
is_int($age),
is_float($salary),
is_bool($loggedIn),
is_null($happy));

echo is_string($name);
echo is_int($age);
echo is_float($salary);
echo is_bool($loggedIn);
echo is_null($happy);
echo "<br>";

// Check if variable is defined

# isset function is used to check the variable defined in the given scope or not.

echo isset($name);
echo isset($fanily);
var_dump(isset($fanily));

// Constants

define('PI', 3.14);
echo PI. '<br>';

// Using PHP built-in constants

echo SORT_ASC. '<br>';
echo PHP_INT_MAX. '<br>';

/* All predefined constangt in php: echo "<pre>";
print_r(get_defined_constants());
echo "</pre>"; */


?>