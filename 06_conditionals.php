<?php

$age = 18;
$salary = 300000;

// Sample if
echo "simple if statement" . "<br>";
if ($age >= 20) {
    echo $age . "<br>";
}

// Without circle braces

echo "if statement without curly braces" . "<br>";
if ($salary = 300000) echo "Good Job" . "<br>";

// Sample if-else

echo "simple if else statement" . "<br>";
if ($age == 18) {
    echo "Eligible for license" . "<br>";
} else {
    echo "You are not eligible" . "<br>";
}
// Difference between == and ===
echo "Difference between == and ===" . "<br>";
if ($age == "18")
    echo " == : it only check the value and ignore type". "<br>";

if ($age === "18") {
    echo "=== : value and type are equals " . "<br>";
    }else{
        echo "=== : not equal because type differs" . "<br>";
        }
        
        // if AND
        echo "if and  AND (&&) operator" . "<br>";
        $my_age = 30;
        if ($my_age === 30 && $salary === 300000){
            echo "I have to achive it" . "<br>";
            }
            
            // if OR
            echo "if and  OR (||) operator" . "<br>";
            if ($my_age === 35 || $salary === 300000)
                echo "Target Locked" . "<br>";
            
            
            // Ternary if
            echo "Ternary if" . "<br>";

            echo ($my_age === 30)
            ? "you are working" . "<br>"
            : "You need to work hard" . "<br>";


// Short ternary
$rank = "Mythical Immortal";
$my_rank = $rank ?: "Epic";
echo "<pre>";
var_dump($my_rank);
echo "</pre>";

// Null coalescing operator

$day = $day ?? "Monday";
echo "$day" . "<br>";

// switch

$designation = "FSWD";

switch($designation){
    case "SDE": echo "Software Developer". "<br>";
        break;
    case "WebDev": echo "Web Developer". "<br>";
    break;
    case "FSWD": echo "Full Stack WordPress Developer". "<br>";
    break;
    default: echo "Not Applicable". "<br>";
}
