<?php
// ? create
$arr = ['Hola', 'Loki'];

// ? update
$arr[0] = "John";

// ? add
$arr[] = "Kelvin";

// ? retrieve
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "<hr>";

// ? Array De-structuring an Index Array
echo "Array De-structuring <br>";
$people = ["Rosy", 22];
list($name, $age) = $people;
[$Name, $Age] = $people;
echo $name;
echo "<br>";
echo $Age;
echo $age;
echo "<br><hr>";

// ? Array De-structuring an Associative Array
$asso = ['name' => 'BoBo', 'age' => 27];
list('name' => $NAME, 'age' => $AGE) = $asso;
['name' => $Name2, 'age' => $Age2] = $asso;
echo $NAME;
echo "<br>";

echo $Name2, $Age2;
echo "<br>";

// ? Spread Operator
$num1 = [1, 2, 3];
$num2 = [4, 5, 6];

$num3 = [...$num1, 7, 8, 9];
print_r($num3);
echo "<br>";

$num4 = [...$num1, ...$num2];
print_r($num4);
echo "<br><hr>";

// ? add new index from start
array_unshift($people, 'Gamma');
echo 'array_push => ';
print_r($people);
echo '<br>';

// ? add new index from end
array_push($people, 'Sara');
echo 'array_push => ';
print_r($people);
echo '<br>';

// ? remove an index from start
array_shift($people);
echo 'array_shift > ';
print_r($people);
echo '<br>';

// ? remove an index from end
array_pop($people);
echo 'array_pop > ';
print_r($people);
echo '<br>';

// ? remove some indexes
// array_splice($num, from which index, no. to remove)
$num = [1, 2, 3, 4, 5, 6, 7, 8, 9];
array_splice($num, 1, 3);
print_r($num);
