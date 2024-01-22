<?php
// ? finding max or min of array or values
$nums = [1, 2, 3, 4, 5, 6];
// max(array)
echo max($nums). '<br>';
// max(values)
echo max(5, 6, 7, 8, 9). '<br><hr>';

// ? random number
echo 'rand() > '. rand();
echo "<br>";
echo 'rand(min, max) > '. rand(10,20). '<br><hr>'; // 10 <= random num <= 20

echo 'mt_rand() > '. mt_rand();
echo "<br>";
echo 'mt_rand(min, max) > '. mt_rand(10,20). '<br><hr>'; 

// ? power
echo pow(2,4); // 16

// ? round 
echo 'round(3.5) > '. round(4.5). '<br>'; // 5
echo 'round(5.4) > '. round(5.4). '<br>'; // 5

// ? sqrt
echo 'sqrt(25) > '. sqrt(25);