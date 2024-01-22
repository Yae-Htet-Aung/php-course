<?php
echo 'hello', ' boys', '<br>';
// echo ('hello', 'boys');
// print('hello', ' good morning');
// ** eho and print cannot use for multiple values
$x = ['one', 2, '3'];
print_r($x);
echo '<br>';
var_dump($x);
echo '<br>';

$y = true;
$y = ['hello'];
$y = 7;
var_dump($y);
echo '<br>';

# constant variable 
// define('VARIABLE NAME', value, case sensitive?)
define('NAME', 'Yae Yae');
// define('NAME', 98, true); ** constant variables cannot define twice
echo NAME;
echo '<br><hr>';

# string
$name = 'Yae Htet Aung';
$position = 'Web Developer';
echo $name . ' is a ' . $position, '.';
echo '<br>';
echo "$name is a $position.";
echo '<br>';
echo "{$name} is 26 years old.";
echo '<br><hr>';

echo "She's Beautiful.";
echo '<br>';
echo '"Hello" php';
echo '<br>';
echo "\"Hello\" I'm Yae.";
echo '<br>';
echo '"Hello" I\'m Yae.';
echo '<br>';
$price = 3;
echo "This apple is \$$price.";
echo '<br><hr>';

# string functions
echo "my string > ".$name;
echo '<br>';

echo "strlen > ".strlen($name);
echo '<br>';

echo "str_word_count > ".str_word_count($name);
echo '<br>';

echo "strrev > ".strrev($name);
echo '<br>';
// string position
echo "find 'e' in \"$position\" from start to end: <br>";
echo "strpos > ".strpos($position, "e"); 
echo '<br>';
// string rev position ** find from end to start of an array
echo "find 'e' in \"$position\" from end to start: <br>";
echo "strrpos > ".strrpos($position, "e"); 
echo '<br>';

echo strtoupper($name);
echo '<br>';
echo strtolower($name);
echo '<br>';

echo str_replace('Htet', 'Tact', $name);
echo '<br>';

echo $name;
$newName = str_replace('Htet', 'Tact', $name);
echo '<br>';
echo $newName;
echo '<br>';

echo substr($position, 0, 3);
echo '<br><hr>';

// number, float or string to integer
$num = '22.33'; 
var_dump((int)$num);
echo '<br><hr>';

// number checking functions
echo 'is_int > ';
var_dump(is_int($num));
echo '<br>';

echo 'is_float > ';
echo is_float($num);
echo '<br>';

echo 'is_numeric > ';
var_dump(is_numeric($num));
echo '<br>';


# booleans
$myVar = null;
var_dump(is_null(($myVar)));

echo '<br><hr>';