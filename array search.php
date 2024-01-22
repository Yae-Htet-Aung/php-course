<?php
// ? Index Array
// ? check is an array contains a value or not ** case sensitive
// returns true or false // 1 || 0
$people = ['Alpha', 'Beta', 'Chromium'];
echo 'in_array => ' . in_array('Alpha', $people);
echo '<br>';

// returns element's index number
echo 'array_search => '. array_search('Chromium', $people);
echo '<br><hr>';

// ? sorting value ** for index array only
$nums = [9,4,3,5,2,6,1,8,7];
sort($nums);
print_r($nums);
echo '<br>';
rsort($nums);
print_r($nums);
echo '<br><hr>';

// ? Associative Arrays
// ? Getting Associative Arary's values
$john = ['fname'=> 'John','lname'=> 'Doe', 'age'=> 22, 'gender' => 'male'];

echo 'array_values > ';
print_r(array_values($john));
echo '<br>';

// ? Getting Associative Arary's keys
echo 'array_keys > ';
print_r(array_keys($john));
echo '<br><hr>';

// ? sorting values
sort($john);
print_r($john);
echo '<br>';
rsort($john);
print_r($john);
echo '<br><hr>';

$john = ['fname'=> 'John','lname'=> 'Doe', 'age'=> 22, 'gender' => 'male'];
// ? sorting keys
ksort($john);
print_r($john);
echo '<br>';
krsort($john);
print_r($john);
echo '<br><hr>';