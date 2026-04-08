<?php

// Print current date

echo date("d M Y H:i:s"). "<br>";

// Print yesterday

echo "time() function is used for current timestamp and (60*60*24) 1 day in seconds" . "<br>";

echo date("d M Y H:i:s", time() - (60*60*24)). "<br>";
echo date("d M Y H:i:s", time() + (60*60*24)). "<br>";


// Different format: https://www.php.net/manual/en/function.date.php

    echo date("F j, Y, g:i a ") . "<br>";
    echo date("d.m.y"). "<br>";

// Print current timestamp

echo time(). "<br>";

// Parse date: https://www.php.net/manual/en/function.date-parse.php

$parse_date = date_parse('2026/04/10 12:49:55');
echo "<pre>";
var_dump($parse_date);
echo "</pre>";


// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php

    $string_date = 'September-25-2026 18:00:10';
    $parsed_date = date_parse_from_format("F-d-Y H:i:s", $string_date) ;

    echo "<pre>";
    var_dump($parsed_date);
    echo "</pre>";
