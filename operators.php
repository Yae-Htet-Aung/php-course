<?php
// ? Arithmetic Operators
echo 1 + 2; // addition
echo "<br>"; 

echo 5 - 3; // subtraction
echo "<br>";

echo 3 * 4; // multiplication
echo "<br>";

echo 5 / 3; // division
echo "<br>";

echo 7 % 2; // modulus
echo "<br>";

echo 5 ** 3; // exponentation ~ pow(5,3)
echo "<hr>"; 

// ? Assignment Operators
$val = 23;
echo $val."<br>"; // 23

$val += 2;
echo $val."<br>"; // 25

$val -= 5;
echo $val."<br>"; // 20

$val *= 2;
echo $val."<br>"; // 40

$val /= 2;
echo $val."<br>"; // 20

$val %= 3;
echo $val."<hr>"; // 2

// ? Increment & Decrement Operators
$var = 23;
echo ++$var."<br>"; // 24
echo $var++ ."<br>"; // 24
echo $var."<hr>"; // 25

$var = 33;
echo --$var."<br>"; // 32
echo $var-- ."<br>"; // 32
echo $var."<hr>"; // 31

// ? Comparison Operators
var_dump(10 == 20); // false
var_dump(10 === '10'); // false
var_dump(10 != 12); // true
var_dump(10 <> '10'); // false

var_dump(10 !== '10'); // true
var_dump(2 > 1); // true
var_dump(4 < 5 ); // true
var_dump(5 >= 4); // true

var_dump(3 <= 3); // true
echo '<hr>';

// ? Logical Operators
// AND (or) && 
// OR (or) ||
// xor ** same => 0 different => 1
// !

if(true xor false){
  echo 'true';
}else {
  echo 'false';
}
echo '<hr>';

// ? String Operators
// . => Concatenation
// .= => Concatenation Assignment
$name = 'Hello';
$name .= ' Kitty';
echo $name;
echo '<hr>';

// ? Conditional Assignment Operators
// ? Ternary Operator
true ? $y = "Yes" : $y = "No";
echo $y;
echo '<hr>';

// ? Null Coalescing Operator
$name = 'John';

echo $name ?? 'Who r u?';
echo '<hr>';

echo $age ?? 'How old r u?';