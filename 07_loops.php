<?php

// while
echo "While loop" . "<br>";
$number = 0;
while($number<=10)
    {
        echo $number . "<br>";
        $number++;
}

// do - while
$numb = 0;
echo "Do while loop or exit control loop" . "<br>";
do{
    echo "Number is : $numb" . "<br>";
    $numb++;
}while($numb<=10);

// for
for ($i = 0; $i<=5; $i++)
    {
    echo "I have to target 3 hours" . "<br>";
}

// foreach

$fruits = ["Banana", "Apple", "Coconut"];

foreach($fruits as $value)
{
    echo $value . "<br>";
}

// Iterate Over associative array.

$person = [
    'name' => "Ashish",
    'age' => "30",
    'hobies' => ["Gaming", "Cars", "Bikes"]
];

foreach ($person as $key => $values){
    if (is_array($values)){
        echo $key . ': ' . implode(",", $values) ."<br>";
    }
    else echo $key . ': ' . $values . "<br>";
}