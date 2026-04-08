<?php

// Function which prints "Hello I am Zura"
function hello(){
    echo "Hello I am Zura" . "<br>";
}

hello();

// Function with argument

function greating($name){
    echo "Hello ia am $name " . "<br>";
}

greating("Rohan");

// Create sum of two functions

function sum($a,$b){
    return $a+$b;
}

echo sum(5,4). "<br>";

// Create function to sum all numbers using ...$nums

function add(...$num){
    $sum = 0;
    foreach($num as $value){
        echo $value . "<br>";
        $sum +=  $value;
    }
    return $sum;
}

echo "the total is: ". add(1,2,3,4,5,6) . "<br>";

// Arrow functions

echo "Arrow function in php is used in sort and simple logic. It don't work in complex logic" . "<br>";
$sub = fn($a,$b) => $a-$b;
echo $sub(9,3);

