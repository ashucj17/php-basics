<?php

// Create array

$fruits = ["Banana","Apple","Orange"]; // Easiest way to declare an array

# OLd tradetional array: $myArray = array("Banana", "Grapes", "Watermelon");

$myArray = array("Banana", "Grapes", "Watermelon");
echo "Creating an Array" . "<br>";
echo "<pre>";
var_dump($myArray);
echo "</pre>";

// Print the whole array

echo "Printing the whole Array" . "<br>";
echo "<pre>";
var_dump($myArray);
echo "</pre>";

// Get element by index
echo "Index of Array" . "<br>";
echo $fruits[0];
echo $fruits[1];
echo $fruits[2];
echo "<br>";
# echo $fruits[3]; // Output: undefined array key

// Set element by index

echo "Setting element by index" . "<br>";
echo $fruits[2] = "Papaya" . "<br>";

// Check if array has element at index 3
echo 'Setting element by index by using isset() function. <br> It will returns the boolean value either 1 or 0' . "<br>";
echo isset($fruits[3]);
echo "<br>";

// Append element
echo "Appending the element in an array" . "<br>";
echo $fruits[3] = "Kivi" . "<br>";

// Print the length of the array
echo "Priniting the length of an array using count() function" . "<br>";
echo count($fruits) . "<br>";

// Add element at the end of the array
echo array_push($fruits, "Mango") . "<br>"; // array_push() function used to add element at the last of the array but it will return the length no the array.
echo "Adding element at the end of an array using array_push() function" . "<br>";
echo "<pre>";
var_dump($fruits) . "<br>";
echo "</pre>";


// Remove element from the end of the array

echo "array_pop() function is used to remove the last element from the array";
array_pop($fruits);
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Add element at the beginning of the array
echo "unshift() function is used to add element at the begining of an array";
array_unshift($fruits, "Mango");
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Remove element from the beginning of the array
echo "shift() function is used to add element at the begining of an array" . "<br>";
echo array_shift($fruits); // It will return the element removed at index 0 from the array.
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Split the string into an array

echo "explode() function is used to split the string into an array". "<br>";
$days = "Monday,Tuesday,Wednesday";
echo "<pre>";
var_dump(explode(',' , $days));
echo "</pre>";

// Combine array elements into string
echo "implode() function is used to combine an array into string". "<br>";
echo $days. "<br>";
# $arrdays stores the value of holdes the value of explode() function
$arrDays = explode(",", $days);
echo "<pre>";
var_dump(implode('|', $arrDays));
echo "</pre>";

// Check if element exist in the array
echo "in_array() function is used to check if element exist in the array or not" . "<br>";
echo "<pre>";
var_dump(in_array("Friday", $arrDays));
echo "</pre>";
// Search element index in the array
echo "array_search function is used to search the element in existing array" . "<br>";
echo "<pre>";
var_dump(array_search("Monday",$arrDays));
echo "</pre>";

// Merge two arrays
echo "array_merge() function is used to megre two arrays";
$vegetables = ["Potato", "Tomato", "Pea"];
echo "<pre>";
// var_dump(array_merge($fruits,$vegetables));
var_dump(...$fruits, ...$vegetables); // spread operator
echo "</pre>";

// Sorting of array (Reverse order also)
echo "Sorting an array using sort() function" . "<br>";
echo "<pre>";
sort($fruits);
var_dump($fruits);
echo "</pre>";

echo "Sorting an array in reverse order using rsort() function" . "<br>";
echo "<pre>";
rsort($fruits);
var_dump($fruits);
echo "</pre>";


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

// Get element by key

// Set element by key

// Null coalescing assignment operator. Since PHP 7.4

// Check if array has specific key

// Print the keys of the array

// Print the values of the array

// Sorting associative arrays by values, by keys


// Two dimensional arrays