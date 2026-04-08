<?php
// Magic constants
echo "__DIR__ returns the directory path or thr foder path" . "<br>";
echo __DIR__ . "<br>";
echo "__FILE__ it return the complete file path" . "<br>";
echo __FILE__ . "<br>";
echo "__LINE__ written the line number where the constant code is writtern" . "<br>";
echo __LINE__ . "<br>";

// Create directory
echo "mkdir() is used to create directory (folder)". "<br>";
mkdir("sample");

// Rename directory
echo "rename() is used to rename the directory" . "<br>";
rename("sample", "test");

// Delete directory

echo "rmdir() is used to delete the directory" . "<br>";
rmdir("sample");

// Read files and folders inside directory
echo "scandir is used to list the files and folders inside a directory", "<br>";
$files = scandir("../");
echo '<pre>';
var_dump($files);
echo '</pre>';



// file_get_contents, file_put_contents
echo "file_get_contents reads the file and prints" . "</br>";
echo file_get_contents("lorem.txt");
echo "file_put_contents creats the file and add the content, if file already exits it overwrite the content. Returns the number of bytes written" . "</br>";
echo file_put_contents("sample.txt",'lorem dummy txt') . "<br>";

// file_get_contents from URL

$user_data = file_get_contents("https://dummyjson.com/users");
echo "file_get_contents also reads the url and prints" . "</br>";
// echo $user_data;
$parsed_data = json_decode($user_data);
echo '<pre>';
echo 'json_decode is used to convert JSON data into array';

// var_dump($parsed_data);
echo '</pre>';

// https://www.php.net/manual/en/book.filesystem.php
// file_exists

echo "check the fiel exists in the library and return boolean value". "<br>";
echo file_exists('sample.txt'). "<br>";

// is_dir
echo "check the directory exists in the library and return boolean value". "<br>";
echo is_dir('test'). "<br>";
// filemtime
// filesize
// disk_free_space
// file