<?php
$arr = [1, 2, 3];
$arr2 = 'Mg Mg';
// ? counting elements no.
// returns a number
echo count($arr);
echo "<br>";

// ? checking array element
// returns true or false // 1 || 0
echo '[0] => ' . isset($arr[0]);
echo '[1] => ' . isset($arr[1]);
echo '[2] => ' . isset($arr[2]);
echo '[3] => ' . isset($arr[3]); // false
echo "<br>";

// ? check whether array or not
// returns true or false // 1 || 0
echo 'is_array => ' . is_array($arr);
echo "<br>";
echo 'is_array => ' . is_array($arr2);
echo "<br>";

// ? exploding Strings as Array
// ! give a new array
$names = 'Yae Tact Aung';
$name = explode(' ', $names); // explode every space
echo 'explode > ';
print_r($name);
echo '<br>';
// output > Array ( [0] => Yae [1] => Tact [2] => Aung )

echo 'implode > ';
$combine = implode('-', $name); // $combine = implode('glue with', pieces);
print_r($combine);
echo '<br>';
// output > Yae-Tact-Aung

// ? redirecting files
// header("location: loop.php");