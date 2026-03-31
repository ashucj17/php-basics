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

// Change the value of the variable

// Print type of the variable

// Variable checking functions

// Check if variable is defined

// Constants

// Using PHP built-in constants

?>