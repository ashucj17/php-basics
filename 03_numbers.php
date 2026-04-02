<?php

// Declaring numbers
$a = 5;
$b= 4;
$c = 1.5;

// Arithmetic operations

echo $a + $b. '<br>';
echo $a - $b. '<br>';
echo $a / $b. '<br>';
echo $a % $b. '<br>';
echo $a * $b. '<br>';
echo '<br>';


// Assignment with math operators

// $a += $b; echo $a . '<br>';
// $a -= $b; echo $a . '<br>';
// $a /= $b; echo $a . '<br>';
// $a %= $b; echo $a . '<br>';
// $a *= $b; echo $a . '<br>';
// echo '<br>';

// Increment operator

# when we use $a++, the value will first displyed and the it will increment by 1
// echo $a . '<br>';
// $a++;

# when we ++$a, the value will increment first then it will be displayed
// ++$a;
// echo $a . '<br>';


// Decrement operator

# when we use --$a, the value will decremented then it will displayed
// --$a;
// echo $a . '<br>';

## When we use $a--, the value will display then it will decremented
// $a--;
// echo $a . '<br>';

// Number checking functions

echo is_float(1.24) . '<br>';
echo is_double(1.24) . '<br>';
echo is_int(5) . '<br>';
echo is_numeric("1.24") . '<br>';
echo is_numeric("1g.24c") . '<br>';

// Conversion

$number = "12345.145";

// $myNumberA = floatval($number);
$myNumberA = (float)$number;
// $myNumberB = intval($number);
$myNumberB = (int)$number;
echo $myNumberA . '<br>';
echo $myNumberB . '<br>';

// Number functions
echo abs(-5) . '<br>'; // give absolute value
echo min(5, 2, 9) . '<br>'; // give  min value
echo max(5, 2, 9) . '<br>'; // give  max value
echo floor(4.9) . '<br>'; // give  floor value
echo ceil(4.2) . '<br>'; // give  celi value
echo pow(4,2) . '<br>'; // give  power value
echo sqrt(4) . '<br>'; // give  square-root value


// Formatting numbers

$value = 147258369.123456;

echo number_format($value , 3 , ".");

// https://www.php.net/manual/en/ref.math.php
